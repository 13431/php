<?php

namespace app\admin\controller;

use app\admin\model\Category as CateModel;

class Category extends Base {
    public function lst() {
        $this->assign([
            "cates" => CateModel::all()
        ]);
        return $this->fetch();
    }

    public function add() {
        if($this->request->isGet()) {
            return $this->fetch();
        }

        $name = input("name");

        $a = new \app\admin\model\Category();
        $a->save(["name" => $name]);

        // 跳转到成功页面
        $this->redirect("/admin/category/lst");
    }

    public function edit($id) {
        if($this->request->isGet()) {
            $this->assign("category", \app\admin\model\Category::get($id));
            return $this->fetch();
        }

        // 获取参数.
        $name = input("name");

        if(strlen($name) < 3) {
            $this->error("Name is too short");
        }


        // 保存
        \app\admin\model\Category::get($id)->data(["name" => $name])->save();

        // 跳转
        $this->redirect("/admin/category/lst");
    }

    public function delete($id) {
        CateModel::destroy($id);
        $this->redirect("/admin/category/lst");
    }
}


