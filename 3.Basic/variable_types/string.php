<?php

$lalala = "小狗小猫和小猪。";

$s1 = "我是一个字符串. $lalala";

$s2 = '我是另一个字符串，其实，$lalala
在我们这里也可以换行。';

$s3 = <<<FENJIEFU
我是一个字符串，我很厉害。
首先，我可以随便换行。$lalala
其次，在里面，可以随便写 " ' 等，不需要任何的转义。
所以，在我这里，你们是自由的。你们是快乐的。
FENJIEFU;

// echo $s1 . "<br>" .$s2 . "<br>" .$s3;

// echo wordwrap("you are very gaoxiao why dui zhongwen meiyou zuoyong ne ?", 2, "<br><br><br>");

$w = "i love x";
$jiamiwandejieguo = str_rot13($w);
$origin = str_rot13($jiamiwandejieguo);
echo $jiamiwandejieguo . "<br>". $origin;

