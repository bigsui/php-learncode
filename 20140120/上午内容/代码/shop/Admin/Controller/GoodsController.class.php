<?php

//后台商品控制器
namespace Admin\Controller;
use Think\Controller;

class GoodsController extends Controller {
    //商品列表展示
    function showlist1(){
        //使用数据model模型
        //实例化model对象
        //$goods = new \Model\GoodsModel();  //object(Model\GoodsModel)
        
        //$goods = D("Goods");  //object(Think\Model)
        //$goods = D();  //object(Think\Model)
        
        $goods = M('User');//实例化Model对象，实际操作Goods数据表
        //$goods = M();  //object(Think\Model)
        
        show_bug($goods);
        
        
        $this -> display();
    }
    
    function showlist(){
        $goods = D('Goods');
        
        //$info = $goods ->table("sw_user")-> select();
        //show_bug($info);
        
        $info = $goods -> select();//获得数据信息
        //把数据assign到模板
        //价格大于1000元的商品
        //where(内部$this,return $this)
        //$('div').css('color','red').css('font-size','30px')
        $info = $goods -> where("goods_price > 1000 and goods_name like '索%'")->select();
        //查询指定的字段
        $info = $goods->field("goods_id,goods_name")->select();
        //限制条数
        $info = $goods->limit(10,5)->select();
        //分组查询group by
        //查询当前商品一共的分组信息
        //通过分组设置可以查询每个分组的商品信息
        //例如：每个分组下边有多少商品信息  
        //      select category_id,count(*) from table group by category_id
        //      每个分组下边商品的价格算术和是多少
        //      select category_id,sum(price) from table group by category_id
        //$info = $goods->field('goods_category_id')->select(); //有重复的
        $info = $goods ->field('goods_category_id')-> group('goods_category_id')->select();
        //show_bug($info);
        //排序显示结果order by goods_price desc
        $info = $goods ->order('goods_price asc')-> select();
        
        $this -> assign('info', $info);
        
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

