<?php
//命名空间的第一个namespace声明之前不能有任何代码

namespace beijing;

function getName(){
    return "beijing";
}

include ("./common.php");

//echo getName(); //beijing

//访问公共空间的元素
echo \getName();  //common