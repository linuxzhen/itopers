
<!--
author: vaster
date: 2017-03-23 20:43:33
title: 【工具-Git】Git配置介绍
tags: git,gitignore,配置
category: python
status: publish
summary: &nbsp;git有三个配置文件
-->


>  
1. Git的三个配置文件
2. 过滤条件
3. 例子
4. 注意事项

#### 1. Git的三个配置文件
* 线上设置
`.gitignore` 用来保存的是公共的需要排除的文件（会提交到版本库）
```shell
# cat .gitignore
log/
*.pyc
*.log
migrations/
*.swp
```

* 本地配置
`.git/info/exclude` 本地需要排除的文件，不会提交到版本库
```shell
# cat .git/info/exclude
tmp/
html_example/
```

* 全局配置
`~/.gitignoreglobal` 对所有git有效
执行以下语句使得它生效
```shell
git config --global core.excludesfile ~/.gitignoreglobal
```

#### 2. 过滤条件
    ?：代表任意的一个字符
    *：代表任意数目的字符
    {!ab}：必须不是此类型
    {ab,bb,cx}：代表ab,bb,cx中任一类型即可
    [abc]：代表a,b,c中任一字符即可
    [^abc]：代表必须不是a,b,c中任一字符

#### 3. 例子
```
*.a         # 忽略所有 .a 结尾的文件
!mm.a       # 但 mm.a 除外
/log        # 仅仅忽略项目根目录下的 log文件，不包括 xxx/log
log/        # 忽略 log/ 目录下的所有文件
doc/*.txt   # 会忽略 doc/notes.txt 但不包括 doc/server/arch.txt

``` 

#### 4. 注意事项
* .gitignore只能忽略那些原来没有被track的文件，如果某些文件已经被纳入了版本管理中，则修改.gitignore是无效的
* git不会加入空目录，如果需要保留目录，不保留文件（`不需要在上层的.gitignore文件忽略此目录`）
     在目录下创建.gitignore 内容为
```
*
 !.gitignore
```
