<?php

// 可以通过 error_reporting 定制异常的显示级别
// error_reporting(E_ERROR);

// 通过 error_handler 对错误进行捕获并处理
function error_rep($errno, $errstr) {
    // 很多其他的错误。
    // web 请求中，跳转到某个页面
    // 要记录相关错误的日志信息
    echo "<pre>出现了一个不应该出现的错误:\n$errstr<pre></pre>";
}
set_error_handler("error_rep");

echo file("xxx");


$sum / 0;