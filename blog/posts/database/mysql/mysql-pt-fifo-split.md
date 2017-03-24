<!-- 
author: beebol
date: 2016-01-19
title: 【mysql】pt工具之pt-fifo-split
tags: pt,percona toolkit,mysql
category: mysql
status: publish 
summary: 读取大文件中的数据并打印到fifo文件,每次达到指定行 数就往 fifo文件中打印一个EOF字符,读取完成以后,关闭掉fifo文件并移走,然后重建fifo文件,打印更多的行。这样可以保证你每次读取的时候都能读取到制定的行数直到读取完成。
-->
>**功能:**读取大文件中的数据并打印到fifo文件,每次达到指定行数就往fifo文件中打印一个EOF字符,读取完成以后,关闭掉fifo文件并移走,然后重建fifo文件,打印更多的行。这样可以保证你每次读取的时候都能读取到制定的行数直到读取完成。

在工作中用到也比较多，在load data大文件时，如果文件太大会导致主从延时等问题，必须得将文件拆分成许多小文件，使用这个工具就不需要人工进行切割文件。

此工具只能工作在类unix操作系统。具体的可以查看: http://www.mysqlperformanceblog.com/2008/07/03/how-to-load-large-files-safely-into-innodb-with-load-data-infile/

在一个session中执行如下命令：
```bash
perl pt-fifo-split infile.txt --fifo /tmp/my-fifo --lines 1000000
```
在另一个session执行如下命令：
```bash
while [ -e /tmp/my-fifo ]; do
   time mysql -e "set foreign_key_checks=0; set sql_log_bin=0; set unique_checks=0; load data local infile '/tmp/my-fifo' into table load_test fields terminated by '\t' lines terminated by '\n' (col1, col2);"
   sleep 1;
done
```






