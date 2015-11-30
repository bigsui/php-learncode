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
        $user = new \Model\UserModel();
        //判断表单是否提交
        if(!empty($_POST)){
            print_r($_POST);
            $z = $user -> create();  //集成表单验证
            //只有全部验证通过$z才会为真
            if(!$z){
                //验证失败,输出错误信息
                //getError()方法返回验证失败的信息
                show_bug($user->getError());

            }
//            $rst = $user -> add();
//            if($rst){
//                echo "success";
//            } else {
//                echo "error";
//            }
        } else {
        }
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

