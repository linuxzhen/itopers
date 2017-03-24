<!--
author: vaster
date: 2016-02-03 11:23:33
title: 【mysql】行转列统计查询
tags: mysql
category: mysql
status: publish
summary: 我们在进行统计查询时，有时候需要将同一日期/位置等条件的不同信息进行行转列的统计，这时候会需要用到以下的方法进行统计，相当方便。
-->
> 我们在进行统计查询时，有时候需要将同一日期/位置等条件的不同信息进行行转列的统计，这时候会需要用到以下的方法进行统计，相当方便。

####  **1. 表结构**
``` mysql
> desc repair_record   ;                 
+------------------------+---------------+------+-----+-------------------+-----------------------------+
| Field                  | Type          | Null | Key | Default           | Extra                       |
+------------------------+---------------+------+-----+-------------------+-----------------------------+
| id                     | bigint(20)    | NO   | PRI | NULL              | auto_increment              |
| sn                     | varchar(255)  | NO   |     | NULL              |                             |
| rack_id                | varchar(255)  | NO   |     | NULL              |                             |
| machine_model          | varchar(255)  | NO   |     | NULL              |                             |
| fault_type             | varchar(255)  | YES  |     | NULL              |                             |
| start_time             | varchar(25)   | YES  |     | NULL              |                             |
| manufacturer_arivetime | varchar(25)   | YES  |     | NULL              |                             |
| roc_donetime           | varchar(25)   | YES  |     | NULL              |                             |
| update_time            | timestamp     | NO   |     | CURRENT_TIMESTAMP | on update CURRENT_TIMESTAMP |
| fault_desc             | varchar(2000) | YES  |     | NULL              |                             |
+------------------------+---------------+------+-----+-------------------+-----------------------------+
```

####  **2. 表记录**
```mysql
> select id,machine_model,fault_type,start_time from repair_record limit 10;
+----+---------------+------------+---------------------+
| id | machine_model | fault_type | start_time          |
+----+---------------+------------+---------------------+
|  2 | Lenovo RD530  | disk       | 2015-12-20 11:40:05 |
|  4 | Lenovo RD540  | disk       | 2015-12-20 21:40:07 |
|  6 | Dell R720     | disk       | 2015-12-20 23:00:07 |
|  8 | IBM X3630 M3  | disk       | 2015-12-21 10:20:06 |
| 10 | IBM X3650 M3  | disk       | 2015-12-21 15:40:04 |
| 12 | Dell R730xd   | disk       | 2015-12-21 15:40:05 |
| 14 | IBM X3650 M3  | disk       | 2015-12-21 17:20:02 |
| 16 | Lenovo RD540  | disk       | 2015-12-21 17:40:03 |
| 18 | Dell R720xd   | disk       | 2015-12-22 10:40:09 |
| 20 | Dell R720     | disk       | 2015-12-22 11:00:06 |
+----+---------------+------------+---------------------+
```

####  **3. 列转行统计数据**
+ **SQL命令**
```mysql
>select machine_model, count(id) 总数, sum(case fault_type when 'disk' then 1 else 0 end ) 硬盘故障, sum(case fault_type when 'mainboard' then 1 else 0 end ) 主板, sum(case fault_type when 'raidcard' then 1 else 0 end ) Raid卡, sum(case fault_type when 'backboard' then 1 else 0 end ) 硬盘背板, sum(case fault_type when 'mem' then 1 else 0 end ) 内存, sum(case fault_type when 'power' then 1 else 0 end ) 电源, sum(case fault_type when 'cpu' then 1 else 0 end ) CPU, sum(case fault_type when 'ilocard' then 1 else 0 end ) ilo卡 from repair_record group by machine_model order by count(id) desc;
```

+ **查询结果**
```mysql
+---------------+--------+--------------+--------+---------+--------------+--------+--------+------+--------+
| machine_model | 总数   | 硬盘故障     | 主板   | Raid卡  | 硬盘背板     | 内存   | 电源   | CPU  | ilo卡  |
+---------------+--------+--------------+--------+---------+--------------+--------+--------+------+--------+
| Dell R730xd   |     61 |           58 |      1 |       0 |            0 |      1 |      0 |    0 |      0 |
| Lenovo RD530  |     43 |           28 |      1 |       0 |            0 |      1 |     13 |    0 |      0 |
| IBM X3650 M3  |     39 |           39 |      0 |       0 |            0 |      0 |      0 |    0 |      0 |
| IBM X3550 M3  |     33 |           30 |      1 |       0 |            0 |      1 |      0 |    0 |      1 |
| Dell R720     |     24 |           15 |      6 |       0 |            0 |      2 |      1 |    0 |      0 |
| IBM X3630 M3  |     22 |           18 |      3 |       0 |            0 |      1 |      0 |    0 |      0 |
| Dell R720xd   |     20 |            7 |      5 |       3 |            3 |      0 |      0 |    2 |      0 |
| Lenovo RD540  |      8 |            5 |      0 |       0 |            0 |      2 |      1 |    0 |      0 |
| Lenovo RD350X |      5 |            5 |      0 |       0 |            0 |      0 |      0 |    0 |      0 |
| Lenovo RD550  |      3 |            2 |      0 |       0 |            0 |      0 |      0 |    0 |      1 |
| Dell T630     |      2 |            2 |      0 |       0 |            0 |      0 |      0 |    0 |      0 |
| Lenovo RD330  |      1 |            1 |      0 |       0 |            0 |      0 |      0 |    0 |      0 |
| Dell R630     |      1 |            1 |      0 |       0 |            0 |      0 |      0 |    0 |      0 |
| Dell R730     |      1 |            0 |      0 |       0 |            1 |      0 |      0 |    0 |      0 |
+---------------+--------+--------------+--------+---------+--------------+--------+--------+------+--------+
```

####  **4. 参考链接**
http://www.cnblogs.com/lhj588/p/3315876.html



