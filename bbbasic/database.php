<?php

// 定义数据源
$dsn = "mysql:host=localhost;dbname=test";

// 定义语句
$create_sql = "create table girl (
  id int primary key auto_increment,
  name varchar(20) not null,
  account varchar(300) )";
$insert_sql = "insert into girl (name, account) VALUE ('张三', 'zhangsan~')";
$select_sql = "select * from girl";

// 连接数据库
$pdo = new PDO($dsn, "root", "root");

// 操作数据库
$pdo->exec("set names utf8");  // 数据库编码
$pdo->exec($create_sql);
$pdo->exec($insert_sql) or die("出现错误: " . $pdo->errorInfo()[2]);

// 查询数据库
$st = $pdo->query($select_sql);
$rows =  $st->fetch(PDO::FETCH_ASSOC);
print_r($rows);

// 使用 Prepare 方式操作数据库
$stmt = $pdo->prepare("select * from girl where id > :id");
$stmt->bindParam(":id", $_GET["id"]);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($rows);

// 释放链接
$pdo = null;