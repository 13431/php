<?php

namespace app\admin\controller;

use think\Db;
use think\Request;

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

    public function save() {
        // 1. 传统的 $_GET/$_POST，不建议使用
        // 2. di，在参数列表里声明，让 tp 自动绑定数据到参数里
        // 3. 只在参数中注入 request 对象，然后就可以通过 request 获取所有东西了
        // 4. 通过 $this->request 的方式，引用到 request 对象....
        //    $r = $this->request;
        // 5. 可以调用
        //    $r = Request::instance();
        //    echo $r->param("title") . $r->post("content");
        // 6. 通过助手函数，直接获取

        // 参数获取
        $data = [
            "title"    => input("title"),
            "keywords" => input("keywords"),
            "content"  => input("content"),
            "author"   => input("author"),
            "digest"   => input("digest"),
            "cateid"   => input("cateid")
        ];

        // 验证

        // 保存到数据库
        // 1. 传统的方式 .. new PDO...
        // 2. Db::query
        //    Db::query("insert into article (title, content) values ('$title', '$content')");
        // 3. Db::....
        //    Db::table("article")->insert($article);
        // 4. 利用模型 Model
        $a = new \app\admin\model\Article();
        $a->save($data);

        // 跳转到成功页面
        $this->redirect("/admin/article/lst");
    }

    public function delete($id) {
        echo "我要被删除了，555: 我是 $id";
        \think\Db::table("article")->where("id", "=", $id)->delete();
        $this->success("/admin/blog/list");
    }
}


