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
    
    function showlist2(){
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
    
    function showlist(){
        
        //查询主键值等于30的记录信息
        //$info = $goods -> select(30);
        //$info = $goods -> find(30);  //返回一维数组结果
        //$info = $goods -> select("20,21,22,23");
        
        //查看记录总条数
//        echo $goods -> count();
//        //echo "<br />";
//        //获得最高价格信息
//        echo $goods -> max('goods_price');
//        
//        echo $goods -> where("goods_price>1000")->count();
        
//        $info = $goods -> having('goods_price > 1000')->select();

        $goods = D("Goods");
        $info = $goods -> select();
        $this -> assign('info', $info);
        $this -> display();
    }
    
    //添加商品
    function add1(){
        //利用数组方式实现数据添加
        $goods = D("Goods");
        $ar = array(
            'goods_name'=>'iphone5s',
            'goods_price'=>4999,
            'goods_number'=>53,
        );
        $rst = $goods -> add($ar);
        
        //利用AR实现数据添加
        $goods = D("Goods");
        $goods -> goods_name = "htc_one";
        $goods -> goods_price = 3000;
        $rst = $goods -> add();
        
        if($rst > 0){
            echo "success";
        } else {
            echo "failure";
        }
        
        $this -> display();
    }
    
    function add(){
        //两个逻辑① 展现表单 ② 接收表单数据
        $goods = D("Goods");
        if(!empty($_POST)){
            //tp框架有方法实现数据收集 数据模型对象->create()
            $goods -> create(); //收集post表单数据
            $z = $goods -> add();
            if($z){
                //展现一个提示页面，并做页面跳转
                //success(提示信息，跳转的url路由地址)
                //$this ->success('添加商品成功', U('Goods/showlist'));
                echo "success";
            } else {
                //$this ->error('添加商品失败', U('Goods/showlist'));
                echo "error";
            }
        }else {
            $this -> display();
        }
    }
    //修改商品
    function upd1(){
        
        $goods = D("Goods");
        $ar = array(
            'goods_name'=>'黑莓手机',
            'goods_price'=>2300
        );
        $rst = $goods ->where('goods_id>60')-> save($ar);
        
        $this -> display();
    }
    
    function upd($goods_id){
        //查询被修改商品的信息并传递给模板展示
        $goods = D("Goods");
        //两个逻辑：展示表单、收集表单
        if(!empty($_POST)){
            $goods -> create();
            $rst = $goods -> save();
            if($rst){
                echo "success";
            } else {
                echo "failure";
            }
        } else {
            $info = $goods->find($goods_id); //一维数组
            $this -> assign('info', $info);
            $this -> display();
        }
    }
    
    //删除方法
    function del(){
        $goods = D("Goods");
        //以下三种方式都可以删除数据
        $rst = $goods -> delete(63);
        $rst = $goods -> delete('61,62,59');
        $rst = $goods -> where('goods_id>56')->delete();
        
        show_bug($rst);
    }
    
    function getMoney(){
        return "1000元钱";
    }
}

