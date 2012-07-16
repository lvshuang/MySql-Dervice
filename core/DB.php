<?php
/**
 * @desc 数据库工厂类，根据DB_TYPE返回相应类型的数据库曹早实例对象
 * @author Lv_Shuang
 *
 */
final class DB{
    public $db;
    public function __construct(){
        if(file_exists(APP_CORE . "/DbDrivers/" . DB_TYPE . ".class.php")) {
        	require_once  APP_CORE . "/DbDrivers/" . DB_TYPE . ".class.php";
        	$dbClass = DB_TYPE;
        	$this->db = new $dbClass();
        	//return $db;
        } else {
        	die("数据库文件不存在！");
        }
    }
}
?>