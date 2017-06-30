<?php
return array(
	//'配置项'=>'配置值'
    'DEFAULT_CHARSET'=>'utf-8',
    'URL_ROUTER_ON' => true,
    'URL_ROUTE_RULES' =>array(
        // 'tt/:name\d|md5/:pass'  =>  'Home/index/home',
        //'/^login\/([a-z]{3,12})\/([0-9]{3,12})$/'=>'Home/index/home?name=:1&pass=:2'
        'login/:id\d$'=>'Home/index/index',
        'login/:name$'=>'Home/index/home',
        'login/:year/:month$'=>array('Home/index/home','id=42')//规则路由；静态路由不支持用数组方式穿参
    ),
    'URL_MAP_RULES'=>array(
        'login'=>"Home/index/home?id=12",//静态路由,固定方式
    ),
    //'ACTION_SUFFIX' => 'Action',// 操作方法后缀
    //'URL_HTML_SUFFIX'=>'html'|'php',//伪静态
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'xukexitong',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'SHOW_PAGE_TRACE'       =>   true  ,//显示页面痕迹
    'DB_PREFIX'             =>  '',    // 数据库表前缀

);