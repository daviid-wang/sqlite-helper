<?php

//应用举例
require_once('cls_sqlite.php');
//创建实例
$DB=new SQLite('sqlite.db'); //这个数据库文件名字任意

//读取特定数据
//print_r($DB->getlist('select * from var_list where id=2'));

//随机取值
//随机取n条
// print_r($DB->getlist('SELECT * FROM var_list ORDER BY RANDOM() limit 1'));

//判断数据库表是否存在
print_r($DB->getlist("select count(*)  from sqlite_master where type='table' and name = 'yourtablename'"));

