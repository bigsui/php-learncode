<?php

//商品控制器
namespace Home\Controller;
use Think\Controller;

class GoodsController extends Controller{
    //商品列表
    function showlist(){
        $this -> display();
    }
    //商品详细信息
    function detail(){
        $this -> display();
    }
}

