<!--
author: beebol
date: 2016-03-17 22:43:33
title: 【mysql】从库5.1升级5.6版本后，时间字段比主库多1秒
tags: mysql,datetime,date,timestamp,datetime微秒
category: mysql
status: public
summary: &nbsp;主库5.1，从库刚升级5.6，pt-table-checksum检验一致性发现，从库记录的时间比主库多1秒，其它数据一样，这是什么情况？
-->
> 主库5.1，从库刚升级5.6，pt-table-checksum检验一致性发现，从库记录的时间比主库多1秒，其它数据一样。并且升级是通过mysqldump方式进行，在指定--single-transaction选项后，备份全innodb表是能够保证数据一致性的。这又是什么情况？

&nbsp;&nbsp;&nbsp;&nbsp;为了确认是不是恢复导致的问题，于是解压dump文件，找到不一致的这条记录，发现与主库数据是一致的。难道是同步出现的问题？我是先恢复完数据就开启了主从同步，追上数据后才开始进行校验的。

&nbsp;&nbsp;&nbsp;&nbsp;从全日志搜索这条记录，发现insert时，那个时间字段带有微秒，突然感觉发现了什么，因为校验的时候并没有这个微秒。于是立即测试一下，果然问题终于找到了，先看看测试情况：

&nbsp;&nbsp;&nbsp;&nbsp;创建一张表，一个datetime字段，然后插入台有微秒的值.主库5.1版本上看时，后面的微秒直接去掉。
![图1](http://www.itopers.com/blog/img/201603/test_table_1.png)

在5.6的从库上看，就多了一秒<br>
![图2](http://www.itopers.com/blog/img/201603/test_table_2.png)

然后再插入一个时间，微秒设置小些，5.1的主库还是一样
![图3](http://www.itopers.com/blog/img/201603/test_table_3.png)

5.6的从库也一样了<br>
![图4](http://www.itopers.com/blog/img/201603/test_table_4.png)

&nbsp;&nbsp;&nbsp;&nbsp;从上面的测试来看，5.1和5.6版本对datetime微秒的处理是不一样的，一个是直接截掉，一个是四舍五入，因为正好在statement下，导致了多一秒的问题产生。

&nbsp;&nbsp;&nbsp;&nbsp;其实官网有明文说明，mysql5.6.4版本开始date,datetime,timestamp中增加了微秒， 并可指定长度，范围0-6，默认为0.
``` mysql
mysql> CREATE TABLE fractest( c1 TIME(2), c2 DATETIME(2), c3 TIMESTAMP(2) );
Query OK, 0 rows affected (0.33 sec)

mysql> INSERT INTO fractest VALUES 
     > ('17:51:04.777', '2014-09-08 17:51:04.777', '2014-09-08 17:51:04.777');
Query OK, 1 row affected (0.03 sec)

mysql> SELECT * FROM fractest;
+-------------+------------------------+------------------------+
| c1          | c2                     | c3                     |
+-------------+------------------------+------------------------+
| 17:51:04.78 | 2014-09-08 17:51:04.78 | 2014-09-08 17:51:04.78 |
+-------------+------------------------+------------------------+
1 row in set (0.00 sec)
```
&nbsp;&nbsp;&nbsp;&nbsp;心细的你会发现，被截断时并没有显示出warnning和error。
&nbsp;&nbsp;&nbsp;&nbsp;一些时间函数都可以带微秒，now(2),CURTIME(2),sysdate(2),UTC_TIMESTAMP(),在老版本中也可带数字，但不会显示微秒。

&nbsp;&nbsp;&nbsp;&nbsp;timestamp(N)在老版本中是可以这么创建表结构的，只是没有显示微秒，在MySQL 5.5.3的时候又被去掉了，所以得注意。

> 还有点需要注意的是，在5.6.4后,timestamp内部是以datetime进行存储的，这个在跨版本checksum校验时会出现不同的结果。

&nbsp;&nbsp;&nbsp;&nbsp;本次升级出现的问题，主要原因还是两个版本差异化对比没有做完成，只是借鉴了之前同事整理的升级注意事项，并没有太多的考虑细节。

参考:
    http://dev.mysql.com/doc/refman/5.6/en/fractional-seconds.html<br>
    http://dev.mysql.com/doc/refman/5.6/en/date-and-time-literals.html#date-and-time-standard-sql-literals