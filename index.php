<?php
header("Content-Type:text/html;charset=utf-8");
session_start();
define('IN_APP', true);

//调用配置文件
require('./config.php');
if(!DEBUG) error_reporting(E_CORE_ERROR);
//调用公共函数文件
require(APP_COMMON . 'functions.php');
//过滤请求数据
require(APP_CORE . 'request.php');
//调用Module基类
require(APP_CORE . 'module.php');
//调用动作
require(APP_CORE . 'action.php');
//调用数据库操作文件
require(APP_CORE . 'DB.php');
//URL 控制器
require(APP_CORE . 'contrulor.php');
//
require(APP_CORE . 'registry.php');
//Smarty模板
require(APP_ROOT . 'smarty/Smarty.class.php');

$db = new DB();
//实例化动作请求过滤
$request = new Request();
//实例化注册类
$registry = new Registry();
//实例化smarty
$smarty = new Smarty();
$smarty->template_dir = APP_TEMPLATE . TEMPLATE . '/template/';
//注册模板实例
$registry->set('smarty', $smarty);
//注册数据库操作实例
$registry->set('DB', $db->db);
//实例化控制器
$contrulor = new Contrulor($registry);

?>