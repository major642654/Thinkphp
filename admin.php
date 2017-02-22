<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/14
 * Time: 12:45
 */
define('APP_DEBUG',true);
// 绑定访问Home模块
define('BIND_MODULE','Home');
// 绑定访问Login控制器
//define('BIND_CONTROLLER','login');
//绑定访问login操作
//define('BIND_ACTION','login');
// 定义应用目录
define('APP_PATH','./Application/');
define('SOURCE', './Public');
require './ThinkPHP/ThinkPHP.php';