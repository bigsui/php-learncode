<?php
//声明命名空间
namespace beijing;
function getName(){
    return "hello";
}
//可以使用到前边声明最近的命名空间的getName()
//echo getName(); //hello
namespace shenyang;
function getName(){
    return "shenyang";
}
//声明命名空间
namespace dalian;
function getName(){
    return "world";
}
//echo getName(); //[非限定名称]获得最近命名空间的getName()  world
//根据命名空间决定使用哪个getName
//会认为在当前命名空间里边获得dalian\beijing\getName
//相对定位  beijing\getName()  //[限定名称]
//绝对定位
echo \beijing\getName();
echo \shenyang\getName();  //[完全限定名称]

