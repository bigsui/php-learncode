<?php

//后台首页控制器
//商品控制器
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller{
    //首页frameset html框架集成方法
    function index(){
        $this -> display();
    }
    
    //展现后台头部页面
    function head(){
        //获得当前系统都给我们提供了什么常量可供使用（系统和自定义的）
        //get_defined_constants([true])
        //true参数会把常量进行自动分组显示
        //var_dump(get_defined_constants(true));
        
        $this -> display();
    }
    //左边页面
    function left(){
        $this -> assign('nanme','hello');
        $this -> display();
    }
    //右边页面
    function right(){
        $this -> display();
    }
    
}
