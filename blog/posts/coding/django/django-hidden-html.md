<!-- 
author: vaster
date: 2016-01-18
title: 【Django-Template】模版中隐藏对象的处理
tags: Django,Templage,Form
category: Django
status: publish 
summary: 在某些情况下我们需要在页面中定义一个隐藏对象,我们来看看Django中隐藏对象如何处理吧.
-->

#### 1. 介绍 ####
在某些情况下我们需要在页面中定义一个隐藏对象,我们来看看Django中隐藏对象如何处理吧.

#### 2. Model定义 ####
Models.py中定义了一个隐藏的对象id_user
```python
'id_user':forms.TextInput(attrs={'class':'form'control','type':'hidden'})
```

#### 3. Template中的处理 ####
* 隐藏对象的处理
```html
{% for item in form.hidden_fields %}
     {{item}}
{% endfor %}
```
* 非隐藏对象的处理
```html
{% for item in form.visible_fields %}
  <div class="form-group">
      <label class="control-label col-md-2" style="text-align:right" >{{item.label}}&nbsp;<font style="color:red"> * </font></label>
        <div class="col-md-5">
           {{item}}
        </div>
        <font style="color:red">{{item.errors}}</font>
    </div>
{% endfor %}
```
