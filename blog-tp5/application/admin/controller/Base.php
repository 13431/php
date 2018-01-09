<?php

namespace app\admin\controller;

use think\Controller;

class Base extends Controller {
    protected function _initialize()
    {
        if( !session("user") ) {
            $this->error("您需要先登陆才能操作哦", "/admin/login/login");
        }
    }
}