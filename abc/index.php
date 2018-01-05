<?php

// 显示所有的商品

// 1. 连接数据库
$link=mysqli_connect("localhost","root","root","php_learning","3306");
// 2. 取出数据
mysqli_query($link,"set names utf8");
$sql="select * from production";
$result=mysqli_query($link,$sql);
// 3. 渲染数据

$result->fetch_all();

mysqli_close($link);