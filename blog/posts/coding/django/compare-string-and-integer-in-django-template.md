<!-- 
author: vaster
date: 2016-01-17
title: 【Django-Template】模版中比较字符串和整型
tags: Django,Templage
category: Django
status: publish 
summary: 在Templage中做数据比较时，有时候会遇到数据类型不匹配的问题，如request中的值默认是str型，而从views中传过来的数据是int型，这时怎么直接比较肯定是不行的，那么该如何做呢？
-->
 
## 问题描述 ##
在Templage中做数据比较时，有时候会遇到数据类型不匹配的问题，如request中的值默认是str型，而从views中传过来的数据是int型，这时怎么直接比较肯定是不行的，那么该如何做呢？
    
## 解决办法 ##
可以使用add将str型的数据加0，实现数据类型str到int的转换
代码如下：
```html
{% if request.id_idc|add:0 = item.id_idc %}
{{ item.id_idc }}
{% endif %}
```
