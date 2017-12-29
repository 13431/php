<?php

$arr = file("E:/www/3.Basic/database.php");

foreach ($arr as $item => $value) {
    echo <<<BBB
<div style="color: red">
   <pre>第 $item 行:     $value</pre>
</div>
BBB;

}

// print_r(get_defined_functions());