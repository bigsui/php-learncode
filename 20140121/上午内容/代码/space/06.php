<?php

//当前没有空间
//当前文件没有空间，引入文件有空间
//默认空间就是当前空间
function getName(){
    return "I am first";
}
class Person{
    static $name = "firstren";
}


include "./common2.php";  //namespace

//echo \getName();    //I am first
//echo getName();     //I am first

//echo beijing\getName();  //common
//echo \beijing\getName(); //common

use beijing\Person as pon;
echo pon::$name;

echo beijing\HOST;