<?php
define('APP_ROOT', str_replace('\\', '/', dirname(__FILE__)) . "/");
define('SERVER', 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']));
define('APP_CORE', APP_ROOT . 'core/');
define('APP_COMMON', APP_ROOT . 'common/');
define('APP_ACTION', APP_ROOT . 'action/');
define('APP_MODULE', APP_ROOT . 'module/');
define('APP_TEMPLATE', APP_ROOT . 'template/');

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PWD', '123456');
define('DB_NAME', 'CMS');
define('DB_TYPE', 'mysql');
define('TEMPLATE', 'default');

define('DEBUG', true);
?>
