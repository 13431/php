<?php

class Article {
    // /aaa
    function article_list() {
        // 显示文件列表
        // 处理数据
        $m = new ArticleModel();
        $result = $m->article_list_data();
        // 返回渲染结果
        $v = new ArticleView();
        $v->article_list_view();
    }
    function article_add() {
        // 新增文件
    }
}