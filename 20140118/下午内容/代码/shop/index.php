<?php

header("content-type:text/html;charset=utf-8");

//定义css、img、js常量
define("SITE_URL","http://web.1116.com/");
define("CSS_URL",SITE_URL."shop/public/Home/css/"); //css
define("IMG_URL",SITE_URL."shop/public/Home/img/"); //img
define("JS_URL",SITE_URL."shop/public/Home/js/"); //js

define("ADMIN_CSS_URL",SITE_URL."shop/public/Admin/css/"); //css
define("ADMIN_IMG_URL",SITE_URL."shop/public/Admin/img/"); //css
define("ADMIN_JS_URL",SITE_URL."shop/public/Admin/js/"); //css

//把目前tp模式由生产模式变为开发调试模式
define("APP_DEBUG",true);

//引入框架的核心程序
include "../ThinkPHP/ThinkPHP.php";