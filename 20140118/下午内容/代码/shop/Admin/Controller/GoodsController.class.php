<?php

//后台商品控制器
namespace Admin\Controller;
use Think\Controller;

class GoodsController extends Controller {
    //商品列表展示
    function showlist(){
        $this -> display();
    }
    
    //添加商品
    function add(){
        $this -> display();
    }
    
    //修改商品
    function upd(){
        //var_dump(get_defined_constants(true));
        $this -> display();
    }
    
    function getMoney(){
        return "1000元钱";
    }
}

