<?php

namespace app\admin\validate;

use think\Validate;

class ArticleValidate extends Validate {

    protected $rule = [
        "title"    => "require|length:4,25",
        "author"   => "require",
        "content"  => "require|length:5,5000"
    ];

    // 验证提示信息
    protected $message = [
        "title"    => "kasdjksafjksajdfjk"
    ];

}


