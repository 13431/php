<?php

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

// 首先. 为项目添加依赖
//    a) 编辑 composer.json，在 require 节点上，添加 smarty，然后执行 composer install 命令安装依赖
//    b) 直接在目录下面执行 composer require smarty/smarty 即可。

// 其次. 在项目中加载 autoload.php
require "vendor/autoload.php";



//// Smarty 示例
// 1. 创建对象
$s = new Smarty();

// __DIR__ 代表当前文件的所在目录
// __FILE__ 代表当前文件的全名

// 2. 设置参数
$s->setTemplateDir(__DIR__ . "/tpl");
$s->setCacheDir(__DIR__ . "/tpl/cache");
$s->setCompileDir(__DIR__ . "/tpl/compile");
//$s->setLeftDelimiter("{{");
//$s->setRightDelimiter("}}");

// 3. 为模板中的变量赋值
$s->assign("name", "汤姆.汉克斯");

// 4. 生成相应文件
$res = $s->fetch("hello.tpl");
echo $res;




//// monolog 示例
// 1. 新建对象
$logger = new Logger("evil");
// 2. 注册 handler
$loggerHandler = new StreamHandler(__DIR__ . "/log/huairen.log");
$logger->pushHandler($loggerHandler, LOG_WARNING);
// 3. 使用
$logger->addWarning("你是个坏人。");