<?php


// regular expression
// regex regexp
// perl regex
// preg
// . 代表任何字符
// * + ? {} 匹配前面的字符多少次
// ^ 从开始匹配 $ 匹配到结束
// () 表示捕捉分组
// [] 表示选定字符

$someString = "xxxx@gmail.xx";
$pattern = '/^[a-zA-Z][_a-zA-Z0-9]{2,20}@[a-zA-Z]+\.[a-zA-Z]+$/';

// 0 "" null false  => false
if(preg_match($pattern, $someString)) {
    echo "$someString 是合法的邮箱地址.";
} else {
    echo "$someString 不合法.";
}
