<?php

// 从 php5 开始出现
//try {
//    $score = 222;
//    if($score >= 100) {
//        throw new Exception("分数不能大于 100.");
//    }
//} catch (Exception $e) {
//    echo "出现了一些错误: " . $e->getMessage();
//}

// 处理未捕获的异常。
set_exception_handler(function($e) {
    // $p = new PDO("sqlite:aaa.db");
    // $p->exec("insert into log (desc) values ...")
    echo "<pre>异常: " . $e->getMessage() . "</pre>";
});

$score = 333;
if($score > 200) {
    throw new Exception("分数太高");
}

echo "over";