<?php

function pp($content) {
    echo "<div>$content</div>";
}

function ppp($c) {
    print_r($c);
    echo "<br><br>==================<br><br>";
}


// 在函数外定义的变量，成为 global 作用域
$server_name = "apache";
function xxx () {

    $server_name = 11111;
//    echo $server_name;

    global $server_name;

    $server_name = 3333;
}
$port = 333;
xxx();
//echo "<br>:::::" . $server_name;


// 静态变量

$i = 5;
function yyy() {
    @pp($i + 1); // 1: $i 刚出现，是一个局部变量，因为没有定义，所以被当做 0

    global $i;
    pp($i + 2); // 7: 因为，global 关键词已经把 $i 引用到了外部的 $i

    pp($GLOBALS["i"]);  // 5

    // 静态变量
    static $iwillneverdiejishihanshuzhixingwanle = 0;
    $iwillneverdiejishihanshuzhixingwanle += 1;
    pp("iwillnotdie: " . $iwillneverdiejishihanshuzhixingwanle);
}

pp("000");
yyy();
pp("111");
yyy();
pp("222");
yyy();
pp("333");
yyy();

ppp($_GET);
ppp($_POST);
ppp($_FILES);
ppp($_REQUEST);
ppp($_COOKIE);
ppp($_SESSION);
ppp($_SERVER);
ppp($_ENV);




