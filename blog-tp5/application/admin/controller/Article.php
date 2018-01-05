<?php

namespace app\admin\controller;

class Article extends Base {
    public function lst() {
        $this->assign([
           "count"      => db("article")->count(),
           "cates"      => db("category")->select(),
           "articles"   => db("article")->select()
        ]);
        return $this->fetch();
    }

    public function edit() {
        return $this->fetch();
    }

    public function delete($id) {
        echo "我要被删除了，555: 我是 $id";
        \think\Db::table("article")->where("id", "=", $id)->delete();
        $this->success("/admin/blog/list");
    }
}


