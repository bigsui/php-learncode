<?php

namespace Home\Controller;
use Think\Controller;

//Controller父类：ThinkPHP/Library/Think/Controller.class.php

class UserController extends Controller{
    //用户登录
    function login(){
        //调用视图display();
        $this -> display();
    }

    //用户注册
    function register(){
        $this -> display();
    }
    
    function _empty(){
        echo "<img src='".IMG_URL.'404.gif'."' alt='' />";
    }
    
    function number(){
        //模仿从数据库获得数据
        return "目前网站注册会员200万";
    }

}

