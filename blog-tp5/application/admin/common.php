<?php

function getNameById($arr, $id) {
    foreach ($arr as $v) {
        if($v['id'] === $id) {
            return $v['name'];
        }
    }
    return "";
}

function renderBread($menus = []) {
    $str = '';
    foreach ($menus as $m) {
        $str .= '<span class=\"c-gray en\">&gt;</span>' . $m;
    }
    echo <<<HTML
<nav class="breadcrumb">
    <i class="Hui-iconfont">&#xe67f;</i> <a href="/admin">首页</a>
    $str
    <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>

<div class="Hui-article">
    <article class="cl pd-20">
HTML;

}


