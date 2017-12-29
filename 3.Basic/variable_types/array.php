<?php


$cars = array("宝马", "奔驰", "奥迪");
$cars = array(0 => "宝马", 1 => "奔驰", 2 => "奥迪");
// var_export($cars);

$car = array("name" => "BMW", "price" => 888898);
// echo "我有一辆车，它的品牌叫" . $car["name"];


$cars = [
    ["name" => "宝马", "price" => 888898],
    ["name" => "奔驰", "price" => 688898],
    ["name" => "奥迪", "price" => 678898]
];
echo "<table>";
foreach ($cars as $ren){
    echo "<tr>";
    foreach ($ren as $n){
        echo "<td>$n</td>";
    }
    echo "</tr>";
}
echo "</table>";


$numbers = [222, 333, 444, 555];
$arr = [];
foreach ($numbers as $n) {
    array_push($arr, $n * 2 + 3);
}
var_dump($arr);

// array_map


var_dump(
    array_map(function($a) {
        return $a * 222 + 3;
    }, $numbers)
);

$abigarray = [];
for($i=1; $i<=100; $i++){
    array_push($abigarray, $i);
}
// 随机打乱里面的顺序，与其相反的是 sort 方法
shuffle($abigarray);

// 请对数组之内所有的数字求和
$sum = 0;
foreach ($abigarray as $n) {
    $sum += $n;
}

var_dump(
    array_reduce($abigarray,
        function ($a, $b) {
            return $a + $b;
        }, 0)
);

print_r(array_sum($abigarray));
print "<br>";
print_r(array_product($abigarray));


// 使用 list 进行结构化赋值
$ourclass = ["php 兴趣班", "224 教室", 41];
$classname = $ourclass[0];
$classpos = $ourclass[1];
$classnumber = $ourclass[2];

list($a, $b, $c) = $ourclass;
var_dump($b);










