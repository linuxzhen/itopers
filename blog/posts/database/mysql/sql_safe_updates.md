<!-- 
author: beebol
date: 2016-04-14 23:53
title: 【mysql】限制不带where条件的update/delete语句
tags: sql_safe_updates,mysql
category: mysql
status: publish 
summary: 目前数据库运维中，为了防止人为操作数据库的风险，开发了许多数据库运维平台及工具，减少了人直接去操作数据，进而降低了人为的操作事故；我们也做了许多数据库安全方面的工作，通过sql阻断，去发现及阻断异常的sql，一是可以及时发现问题，让程序及时修复bug，二是避免了数据被异常修改及数据被拖走。
-->
>目前数据库运维中，为了防止人为操作数据库的风险，开发了许多数据库运维平台及工具，减少了人直接去操作数据，进而降低了人为的操作事故；我们也做了许多数据库安全方面的工作，通过sql阻断，去发现及阻断异常的sql，一是可以及时发现问题，让程序及时修复bug，二是避免了数据被异常修改及数据被拖走。但是当程序bug（这里指的是运维平台和前端业务程序），一条看似正常，其实异常的sql来请求数据或者修改数据时，目前的sql阻断是比较难去匹配的。例如一条没有带where条件的update/delete操作，或者sql拼接丢失where条件等等。对于此，我们可以做些什么，来避免这些问题。

#**数据库：**#
sql_safe_updates参数可以限制不带where条件的update/delete语句执行失败，这个参数设置后，可以防止业务bug/漏洞导致把整个表都更新或者删除（有真实的case），也可以防止DBA在线误操作更新/删除整张表。例如下sql:  将某个uid的记录的账户扣掉1000元，但由于书写或者是程序bug将where条件拼接丢失，写成如下sql了，所造成的影响是灾难性的。
```mysql
update sql_safe set balance = balance - 1000
```
sql_safe_updates 的官方解释如下：
```txt
 If set to 1, MySQL aborts UPDATE or DELETE statements that do not  use a key in the WHERE clause or a  LIMIT clause.
(Specifically,  UPDATE statements must have a WHERE clause that uses a key or a LIMIT clause, or both.
DELETE statements must have both.) This makes it possible to catch UPDATE or 
DELETE statements where keys are not used properly and that would probably change or delete  a large number of rows.
 The default value is 0.
```
意思是说当sql_safe_updates设置为1时，**update:**要有where，并查询条件必须使用为索引字段，或者使用limit，或者两个条件同时存在，才能正常执行。**delete**:where条件中带有索引字段可删除，where中查询条件不是索引，得必须有limit。主要是防止update和deLete没有使用索引导致变更及删除大量数据。参数默认值为0
 
|no where|where key|where nokey|limit|where nokey+limit|where key+limit|
|----|--|--|--|--|--|--|
|delete|No|Yes|No|No|Yes|Yes|
|update|No|Yes|No|Yes|Yes|Yes|

可以看如下例子：
```mysql
CREATE TABLE `sql_safe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `balance` decimal(12,2) unsigned NOT NULL DEFAULT '0.00',
  `uid` bigint(20) NOT NULL,
  `nuid` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_uid` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8
mysql> select * from sql_safe;
+----+---------+-----+------+
| id | balance | uid | nuid |
+----+---------+-----+------+
|  1 |    0.10 | 123 |  123 |
|  2 |  212.00 | 124 |  124 |
|  3 |    1.01 | 150 |  150 |
|  4 |    2.00 | 129 |  129 |
|  5 |   23.10 | 130 |  130 |
|  6 |  236.00 | 126 |  126 |
|  7 |   26.01 | 127 |  127 |
|  8 |   31.00 | 131 |  131 |
+----+---------+-----+------+
8 rows in set (0.00 sec)
mysql> show variables like 'sql_safe_updates';
+------------------+-------+
| Variable_name    | Value |
+------------------+-------+
| sql_safe_updates | ON    |
+------------------+-------+
#语句A:
mysql> update sql_safe set balance = balance - 10;
ERROR 1175 (HY000): You are using safe update mode and you tried to update a table without a WHERE that uses a KEY column
 
#语句B:
mysql> update sql_safe set balance = balance - 10 where nuid = 123;
ERROR 1175 (HY000): You are using safe update mode and you tried to update a table without a WHERE that uses a KEY column
 
#语句C:
mysql> update sql_safe set balance = balance - 10 where uid = 123;
Query OK, 1 row affected, 1 warning (0.00 sec)
Rows matched: 1  Changed: 1  Warnings: 1
 
#语句D:
mysql> update sql_safe set balance = balance - 10 limit 1;
Query OK, 0 rows affected, 2 warnings (0.00 sec)
Rows matched: 1  Changed: 0  Warnings: 1
```
语句A和语句B一个是没有使用where，一个是没有用到索引，都提示执行失败，报ERROR  1175

语句C和语句D一个是where中使用了索引字段，一个是使用了limit，都是精确到了部分数据。

关于Warnings: 1这个，是out of range的原因，这个后续再说明下各个数值字段类型超范围的处理。

Delete会不一样些，条件更为严格：
```mysql
#语句E：
mysql> delete from sql_safe ;
ERROR 1175 (HY000): You are using safe update mode and you tried to update a table without a WHERE that uses a KEY column
 
#语句F：
mysql> delete from sql_safe where nuid = 123;
ERROR 1175 (HY000): You are using safe update mode and you tried to update a table without a WHERE that uses a KEY column
 
#语句G：
mysql> delete from sql_safe where uid = 123;
Query OK, 1 row affected (0.00 sec)
 
#语句H：
mysql> delete from sql_safe where nuid = 124 limit 1;
Query OK, 1 row affected, 1 warning (0.00 sec)
 
#语句I：
mysql> delete from sql_safe limit 1;
ERROR 1175 (HY000): You are using safe update mode and you tried to update a table without a WHERE that uses a KEY column
```
delete只有使用where条件带索引，或者where +limit可以正常执行，其它都会有问题。

所以说，启用这个参数，需要详细了解业务中的sql，是否都通过索引进行update/delete，如果没有，会出现sql执行报错。

另外，sql_safe_updates这个参数在各版本之间的功能都一样，唯一的区别是作用域不一样。

5.0，5.1都是session级别的，5.5，5.6是global&session级别。

正因为这个作用域的限制，在低版本中无法在线在数据库中直接开启这个功能，高版本中可在线开启，但也需要中断现有连接才能生效。

那么如果才能让这个sql_safe_updates这个功能生效？

1、低版本数据库只能程序端直接在创建session时，带上set sql_safe_updates = 1

2、高版本数据库可以set global sql_safe_updates = 1;然后让前端程序重新创建连接。也可在创建session时，set sql_safe_updates = 1;

#**proxy:**#
前面这个参数，只能限制没有带where条件的update/delete，如果出现sql拼接错误，丢失查询条件，这个参数是无能为力。如何才能做到这点？目前已经了解到，在proxy层是可以实现的，proxy可以根据提前注册业务签名sql，只有来自已经注册的sql才能正常被发送到mysql，这种方式有两个好处：
```txt
1、阻断所有未正常注册的sql，可避免上述的两种情况发生（不带where条件变更sql和sql拼接丢失）；
2、所有sql都经过了dba的评审，没有通过评审的sql无法正常上线，避免了RD上线新功能有些不理想的sql把整个数据库拖跨。
```
但也存在一定的局限性：
```txt
1、如果业务变更频繁，sql量比较大，会对proxy带来一些压力，影响效率
2、容易出现线上问题 ，rd提供sql不完整等，可能导致sql无法正常被执行
```




