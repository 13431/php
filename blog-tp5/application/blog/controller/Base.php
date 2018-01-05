<?php
namespace app\blog\controller;

use think\Controller;
use think\Db;

class Base extends Controller {
    function _initialize() {
//        $this->assign("cates", Db::table("category")->select());
//        $this->assign("hots", db("article")->order("click desc")->limit(5)->select());
//        $this->assign("option", db("blog_option")->find());

        $this->assign([
            "cates"  =>  Db::table("category")->select(),
            "hots"   =>  db("article")->order("click desc")->limit(5)->select(),
            "option" =>  db("blog_option")->find()
        ]);
    }
}


