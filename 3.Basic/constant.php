<?php

function pp($content) {
    echo "<div>$content</div>";
}


// 定义之后就不会发生变化的量

define("COUNTRY", "中华人民共和国");

define("COUNTRY", "朝鲜");

// 特殊的常量
pp(__FILE__);  // 当前文件名
pp(__DIR__);   // 当前路径
pp(__LINE__);  // 当前行
pp(PHP_VERSION); // 版本号

// 判断使用的 php 版本号
// 如果，他死性不改，还使用 5 及以下的版本
if(PHP_MAJOR_VERSION < 7) {
    die("请使用 PHP7 以及以上的版本，谢谢！");
}


