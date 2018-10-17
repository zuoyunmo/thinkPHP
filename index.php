<?php

/*
1.加载thinkPHP.php
    require('./ThinkPHP/ThinkPHP.php');

2.加载核心文件 ./thinkPHP/Lib/Core

3.加载项目文件      分析URL     调用相关控制器
    m  module   模块    控制器
    a   action  方法    action=页面

*/


/*  以下为项目文件的加载方式
$module=isset($_GET['m'])?$_GET['m']:'Index';
$action=isset($_GET['a'])?$_GET['a']:'Index';
$zym=new $module();
$zym->$action();
class index{//127.0.0.1:8000/php/index.php?m=index&a=index
    //  ./App/Lib/Action/IndexAction.class 中的function
    function __construct(){
        echo '调用了index控制器<br/>';
    }
    function index(){
        echo '我是indxe控制器的index方法';
    }
    function test(){
        echo '我是indxe控制器的test方法';
    }
}

class test{//127.0.0.1:8000/php/index.php?m=test&a=index
    function __construct(){
        echo '调用了test控制器<br/>';
    }
    function index(){
        echo '我是test控制器的index方法';
    }
    function test(){
        echo '我是test控制器的test方法';
    }
}

exit;
*/
define('APP_DEBUG',true);    //开发模式
define('APP_NAME','App');
define('APP_PATH','./App/');
require('./ThinkPHP/ThinkPHP.php');