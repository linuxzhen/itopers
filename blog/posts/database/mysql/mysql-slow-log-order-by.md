<!--
author: beebol
date: 2016-02-25 23:22:33
title: 【mysql】慢查询之同一个字段做两次排序的思考
tags: mysql,asc,慢查询,slow.log
category: mysql
status: public
summary: &nbsp;线上的一个慢查询sql，同一个字段尽然做了两次排序，怎么考虑的，写错了？
-->

> 线上业务使用到了ORM框架，发现了一个慢查询sql，同一个字段做了两次排序，导致产生了filesort。

ORM框架自带的表结构如下：
```mysql
CREATE TABLE `unopen` (
  `corp` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `invtype` tinyint(3) NOT NULL DEFAULT '1',
  `uid` int(10) NOT NULL DEFAULT '0',
  `username` char(32) NOT NULL DEFAULT '0',
  `fatid` int(10) NOT NULL DEFAULT '0',
  `fatname` char(32) NOT NULL DEFAULT '0',
  `invtitle` char(100) NOT NULL DEFAULT '',
  `invest` decimal(12,2) NOT NULL DEFAULT '0.00',
  `opened` decimal(12,2) unsigned NOT NULL DEFAULT '0.00',
  `unopened` decimal(12,2) NOT NULL DEFAULT '0.00',
  `doflag` tinyint(3) NOT NULL DEFAULT '0',
  `manual_opened` decimal(12,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`uid`,`corp`,`doflag`,`invtype`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
```
看到这个表结构就会想到第一件事就想增加自增主键（有点强迫症的感觉），其实表不一定要一个自增整型的字段来做主键，只要是能保证唯一的字段都可以用来做主键，最好是整型。但主要还得看应用场景，只有等值查询的列，或多列来创建单列主键或联合主键，可能会更好，因为如果作为二级索引存在时，可能还会造成回表查询，直接是主键可直接通过主键拿回数据。
回到正题,原sql是如下这样的：
```mysql
SELECT `i`.*, `v`.`type`, `v`.`status` FROM `V_STAT`.`unopen` AS `i`
 LEFT JOIN `V_USER`.`info` AS `v` ON `i`.`uid` = `v`.`uid` WHERE (`i`.`uid` > 0) AND (`i`.`corp` = '31') AND (`i`.`doflag` = '2') ORDER BY `uid` ASC, `uid` ASC, `corp` ASC LIMIT 50;
```
这个sql执行需要2.5s多,explain一看进行了filesort
```mysql
+----+-------------+-------+-------+---------------+---------+---------+---------------+---------+-----------------------------+
| id | select_type | table | type  | possible_keys | key     | key_len | ref           | rows    | Extra                       |
+----+-------------+-------+-------+---------------+---------+---------+---------------+---------+-----------------------------+
|  1 | SIMPLE      | i     | range | PRIMARY       | PRIMARY | 4       | NULL          | 1610297 | Using where; Using filesort |
|  1 | SIMPLE      | v     | ref   | PRIMARY       | PRIMARY | 4       | V_STAT.i.uid |       1 |                             |
+----+-------------+-------+-------+---------------+---------+---------+---------------+---------+-----------------------------+
```
根据表的结构及sql，都使用了索引字段查询排序，且排序字段都是基表字段，应该不需要再排序了，对如何让group by不产生sort可以参考下[【mysql】创建索引时如何考虑order by查询](http://www.itopers.com/blog/posts/wp/1177.html)。在调整单引号时，发现这个sql出现了两次uid的排序，而且没有明确标明是哪个表的。意思应该是使用i.uid和v.uid进行排序，于是我就加上。
```mysql
mysql> explain SELECT  `i`.*, `v`.`type`, `v`.`status` FROM `V_STAT`.`unopen` AS `i`  LEFT JOIN `V_USER`.`info` AS `v` ON `i`.`uid` = `v`.`uid` WHERE (`i`.`uid` > 0) AND (`i`.`corp` = 3) AND (`i`.`doflag` = 2) ORDER BY i.`uid` ASC, v.`uid` ASC, i.`corp` ASC LIMIT 50; 
+----+-------------+-------+-------+---------------+---------+---------+---------------+---------+----------------------------------------------+
| id | select_type | table | type  | possible_keys | key     | key_len | ref           | rows    | Extra                                        |
+----+-------------+-------+-------+---------------+---------+---------+---------------+---------+----------------------------------------------+
|  1 | SIMPLE      | i     | range | PRIMARY       | PRIMARY | 4       | NULL          | 1610297 | Using where; Using temporary; Using filesort |
|  1 | SIMPLE      | v     | ref   | PRIMARY       | PRIMARY | 4       | V_STAT.i.uid |       1 |                                              |
+----+-------------+-------+-------+---------------+---------+---------+---------------+---------+----------------------------------------------+
```
发现了using temporary，当没有指定排序表时，默认走i表的uid了。其实这里已经很明显，这个uid是不需要做两次排序的，因为两个表的uid是相同的，取出来时顺序肯定是一样的。果断地删除后面的uid 排序，并明确排序表为i，这里只为增加可读性。
```mysql
mysql> explain SELECT  `i`.*, `v`.`type`, `v`.`status` FROM `V_STAT`.`unopen` AS `i`  LEFT JOIN `V_USER`.`info` AS `v` ON `i`.`uid` = `v`.`uid` WHERE (`i`.`uid` > 0) AND (`i`.`corp` = 3) AND (`i`.`doflag` = 2) ORDER BY i.`uid` ASC, i.`corp` ASC LIMIT 50;
+----+-------------+-------+-------+---------------+---------+---------+---------------+---------+-------------+
| id | select_type | table | type  | possible_keys | key     | key_len | ref           | rows    | Extra       |
+----+-------------+-------+-------+---------------+---------+---------+---------------+---------+-------------+
|  1 | SIMPLE      | i     | range | PRIMARY       | PRIMARY | 4       | NULL          | 1610297 | Using where |
|  1 | SIMPLE      | v     | ref   | PRIMARY       | PRIMARY | 4       | V_STAT.i.uid |       1 |             |
+----+-------------+-------+-------+---------------+---------+---------+---------------+---------+-------------+
```
filesort消失，查询直接变为ms级。




