<?php

namespace Home\Controller;
use Think\Controller;

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
}

