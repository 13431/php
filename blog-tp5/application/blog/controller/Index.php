<?php
namespace app\blog\controller;

use think\Controller;

class Index extends Controller
{
    public function index() {
        $this->assign("user", db("user")->where('username', '=', 'admin')->select());
        $this->assign("cates", db("category")->select());
        $this->assign("articles", db("article")->paginate(2));
        return $this->fetch();
    }

    public function article() {
        return $this->fetch();
    }

    public function demo() {
        // 获取数据
        $t = db("article");
        $t->select();  // 所有数据
        $t->count();   // 条目
        $t->find();    // 取出第一条
        $t->value('name');  // 取出某个值
        $t->column('');     // 某一列信息
        $t->limit(5)
            ->order('id desc')
            ->where('name' , '<>', 'xxx')
            ->where('', '', '')
            ->select();

        $t->paginate(2);

        // 渲染给用户

        $this->assign("wannengdeshuzu", ['name'=>'鲁迅', 'book'=>'故事新编']);
        $this->assign("chuandiyigecanshugeimubanyinqing", "哈哈哈哈哈哈或");
        $this->assign("henduoshu", [
            ['name'=>'php之道', 'price'=>22],
            ['name'=>'java之道', 'price'=>12],
            ['name'=>'.net之道', 'price'=>232],
            ['name'=>'xxx之道', 'price'=>223],
            ]);
        return $this->fetch();
    }
}
