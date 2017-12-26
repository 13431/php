<?php
// 0. 为项目引入 composer 依赖
//    a) 编辑 composer.json，在 require 节点上，添加 smarty，然后执行 composer install 命令安装依赖
//    b) 直接在目录下面执行 composer require smarty/smarty 即可。

// 1. 引入
require "vendor/autoload.php";

// 2. 创建对象
$s = new Smarty();

// __DIR__ 代表当前文件的所在目录
// __FILE__ 代表当前文件的全名

// 3. 设置参数
$s->setTemplateDir(__DIR__ . "/tpl");
$s->setCacheDir(__DIR__ . "/tpl/cache");
$s->setCompileDir(__DIR__ . "/tpl/compile");
//$s->setLeftDelimiter("{{");
//$s->setRightDelimiter("}}");

// 4. 为模板中的变量赋值
$s->assign("name", "汤姆.汉克斯");

// 5. 生成相应文件
$res = $s->fetch("hello.tpl");
echo $res;
