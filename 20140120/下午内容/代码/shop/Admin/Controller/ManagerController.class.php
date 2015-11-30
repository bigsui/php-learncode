<?php

//后台管理员控制器
//命名空间
namespace Admin\Controller;
use Think\Controller;

class ManagerController extends Controller{
    function login(){
        //display()没有参数，那么获得的模板名称与当前操作的名称一致
        //display('hello');   Admin/View/Manager/hello.html
        $this -> display();
    }
}
