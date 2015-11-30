<?php

//后台管理员控制器
//命名空间
namespace Admin\Controller;
use Think\Controller;

class ManagerController extends Controller{
    function login(){
        //获得语言变量信息
        //L()获得全部语言
        //L('USERNAME') 获得指定语言
        //.show_bug(L());
        
        $this -> assign('lang',L());
        
        $this -> display();
    }
}
