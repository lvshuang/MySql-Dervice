<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Lv_Shuang
 * Date: 12-3-7
 * Time: 下午8:34
 * To change this template use File | Settings | File Templates.
 */

require_once('config.php');
if(!isset($_SESSION['admin_user'])){
    $smarty->display("template/default/login.tpl");
    exit;
}else{
    $smarty->display("template/default/main.tpl");
    exit;
}
 
