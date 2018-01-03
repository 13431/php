<?php
namespace app\blog\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        // 获取数据
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
