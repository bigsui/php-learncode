<?php

return array(
    //以下内容要把ThinkPHP/Conf/Mode/common.php的指定配置给覆盖
    'app_begin'     =>  array(
        'Behavior\ReadHtmlCache', // 读取静态缓存
        'Behavior\CheckLang',   //启动多语言支持
    ),
);