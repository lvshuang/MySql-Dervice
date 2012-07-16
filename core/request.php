<?php
/**
 * @desc 去除全局变量中的HTML代码  
 * @author Lv_Shuang lvshuang1201@gmail.com
 */
final class Request{
    public $get = array();
    public $post = array();
    public $cookie = array();
    public $files = array();
    public $server = array();
 /**
  * @desc 开始过滤 
  */   
    public function __construct(){
        $_GET = $this->clean($_GET);
        $_POST = $this->clean($_POST);
        $_COOKIE = $this->clean($_COOKIE);
        $_SERVER = $this->clean($_SERVER);
        
        $this->get = $_GET;
        $this->post = $_POST;
        $this->cookie = $_COOKIE;
        $this->server = $_SERVER;
    }
    
    public function clean($data){
        if(is_array($data)){
            foreach ($data as $key => $value){
                unset($data[$key]);
                
                $data[$this->clean($key)] = $this->clean($value);
            }
        } else {
            $data = htmlspecialchars($data, ENT_COMPAT);
        }
        
        return $data;
    }
}
?>