<?php

header("content-type:text/html;charset=utf-8");

//定义css、img、js常量
define("SITE_URL","http://web.1116.com/");
define("CSS_URL",SITE_URL."shop/public/css/"); //css
define("IMG_URL",SITE_URL."shop/public/img/"); //css
define("JS_URL",SITE_URL."shop/public/js/"); //css

//把目前tp模式有生成模式变为开发模式
define("APP_DEBUG",true);

//引入框架的核心程序
include "../ThinkPHP/ThinkPHP.php";