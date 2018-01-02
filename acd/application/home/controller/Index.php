<?php
namespace app\home\controller;

use think\Controller;
use think\Db;


class Index extends Controller
{
    public function index()
    {
        pp("哈哈，我是蓝色的吗？");
    }

    public function testdb() {
        echo input("n");

        // 验证

        $d = Db::table("names")->select();
        $this->assign("names", $d);
        return $this->fetch("testdb");
    }
}
