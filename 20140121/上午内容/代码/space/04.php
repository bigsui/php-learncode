<?php

//子空间-引入命名空间应用
namespace beijing\chaoyang;
class Person{
    static $name = "chaoyangren";
}
namespace tianjin\hexi;
function getName(){
    return "hexi";
}
class Person{
    static $name = "hexiren";
}
//引入空间(空间和元素都引入)
use beijing\chaoyang\Person;
echo Person::$name;

//引入空间
use beijing\chaoyang;
//使用 限定名称 就可以定位已经引入的空间元素
echo chaoyang\Person::$name;

//引入空间和元素(别名使用)
use beijing\chaoyang\Person as pon;
echo pon::$name;

use beijing\chaoyang;
echo chaoyang\Person::$name;//hexiren
