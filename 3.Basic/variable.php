<?php

//$我的名字 = "Kitty";

//echo $我的名字;

// $name = "abc";
// $Name = "bcd";
//
// echo $name . "/" . $Name;
//
//
// $aaa = "我是一个字符串";
// $bbb = 666;
// $ccc = [1, 3, '2'];


$ddd = "333";

if(isset($ddd)) {
    echo $ddd;
} else {
    echo "我还没有定义哦";
}

if(is_integer($ddd)) {
    echo "很好啊，你是一个数字啊";
} else {
    echo "你不是数字，你奏凯。";
}


unset($ddd); // 取消定义

