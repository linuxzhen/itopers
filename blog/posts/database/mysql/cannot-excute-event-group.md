<!--
author: beebol
date: 2016-03-11 14:43:33
title: 【mysql】5.6.23开启并行复制时的冷迁移问题
tags: mysql,并行复制,replication,slave_parallel_workers
category: mysql
status: public
summary: &nbsp;5.6.23在开启并行复制的时候，进行冷迁移后，start slave报错，set global slave_parallel_workers =0后可正常进行复制
-->

> 5.6.23在开启并行复制的时候，进行冷迁移后，start slave报错，set global slave_parallel_workers =0后可正常进行复制。
**说明：**已有从库并行复制配置：slave_parallel_workers = 4；通过停库拷贝datadir目录到目标机器，实现冷迁移，完成后目录机器start slave时报如下错误。

####  **具体的报错信息**
``` mysql
              Master_Log_File: mysql-bin.000283
          Read_Master_Log_Pos: 715296037
               Relay_Log_File: relay-log.000294
                Relay_Log_Pos: 245347818
        Relay_Master_Log_File: mysql-bin.000283
             Slave_IO_Running: No
            Slave_SQL_Running: No
              Replicate_Do_DB: 
          Replicate_Ignore_DB: 
           Replicate_Do_Table: 
       Replicate_Ignore_Table: 
      Replicate_Wild_Do_Table: 
  Replicate_Wild_Ignore_Table: mysql.%,test.%
                   Last_Errno: 1755
                   Last_Error: Cannot execute the current event group in the parallel mode. Encountered event Stop, relay-log name ./relay-log.000294, position 245347905 which prevents execution of this event group in parallel mode. Reason: possible malformed group of events from an old master.
                 Skip_Counter: 0
          Exec_Master_Log_Pos: 245347659
              Relay_Log_Space: 715297197
              Until_Condition: None
               Until_Log_File: 
                Until_Log_Pos: 0
           Master_SSL_Allowed: No
           Master_SSL_CA_File: 
           Master_SSL_CA_Path: 
              Master_SSL_Cert: 
            Master_SSL_Cipher: 
               Master_SSL_Key: 
        Seconds_Behind_Master: NULL
Master_SSL_Verify_Server_Cert: No
                Last_IO_Errno: 0
                Last_IO_Error: 
               Last_SQL_Errno: 1755
               Last_SQL_Error: Cannot execute the current event group in the parallel mode. Encountered event Stop, relay-log name ./relay-log.000294, position 245347905 which prevents execution of this event group in parallel mode. Reason: possible malformed group of events from an old master.
  Replicate_Ignore_Server_Ids: 
             Master_Server_Id: 2331597761
                  Master_UUID: 75f94423-e1c1-11e5-8da4-70e2840af125
             Master_Info_File: /ssd/mysql/mysql_48284/var/master.info
                    SQL_Delay: 0
          SQL_Remaining_Delay: NULL
      Slave_SQL_Running_State: 
              Semi_Sync_Group: 
           Master_Retry_Count: 86400
                  Master_Bind: 
      Last_IO_Error_Timestamp: 
     Last_SQL_Error_Timestamp: 160311 15:54:17
               Master_SSL_Crl: 
           Master_SSL_Crlpath: 
           Retrieved_Gtid_Set: 
            Executed_Gtid_Set: 
                Auto_Position: 0
```
如上报错后，可stop slave后，将slave_parallel_workers设置为0，关闭并行复制,然后再start slave后，重新开启并行复制就没有问题。

可以参考下：http://bugs.mysql.com/bug.php?id=71495 ，之前的版本直接在日志里报的error。
