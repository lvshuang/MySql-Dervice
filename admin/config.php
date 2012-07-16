<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Lv_Shuang
 * Date: 12-3-7
 * Time: 下午8:18
 * To change this template use File | Settings | File Templates.
 */
require_once("../config.php");
define('APP_ADMIN', APP_ROOT . 'admin/');
define('THEM', 'default/');
define('APP_ADMIN_TEMPLATE', APP_ADMIN . 'template/' . THEM);
require_once(APP_CORE . "DB.php");
require_once(APP_ROOT . "smarty/Smarty.class.php");
$smarty = new Smarty();
$smarty->template_dir = APP_ADMIN_TEMPLATE;
$db = new DB();
 ?>
