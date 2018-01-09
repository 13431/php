<?php

namespace app\admin\controller;

use app\admin\model\User;
use think\captcha\Captcha;
use think\Controller;

class Login extends Controller {
    public function login () {
        if($this->request->isGet()) {
            return $this->fetch();
        }

        $username = input("username");
        $password = input("password");
        $code     = input("code");

        $c = new Captcha();
        if( !$c->check($code) ) {
            $this->error("验证码错误", "/admin/login/login");
        }

        $user = User::where("username", $username)->find();

        if($user['password'] == $password) {
            session("user", $user->getData());
            session("userid", $user['id']);
            $this->redirect("/admin/index/index");
        } else {
            $this->error("密码输入有误，请重试", "/admin/login/login");
        }
    }
}
