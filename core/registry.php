<?php
/**
 * @desc 注册类
 * @author Lv_Shuang lvshuang1201@gamil.com
 * 
 */
final class Registry {
    private $data = array();
    
//     public function __construct(){}
    
    //设置值
    public function set($key, $value){
        $this->data[$key] = $value;
    }
    
    //获取值
    public function get($key){
        return (isset($this->data[$key]) ? $this->data[$key] : NULL);
    }
    
    //检查值是否存在
    public function has($key){
        return isset($this->data[$key]);
    }
}
?>