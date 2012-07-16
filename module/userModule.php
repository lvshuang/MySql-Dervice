<?php
// if(!defined(IN_APP)){
//     exit("不能直接访问此文件！");
// }
/**
 * @desc 用户操作模型，包含用户登录、注册和退出等功能
 * @author Lv_Shuang
 *
 */
class userModule extends Module {
	/**
	 * @desc 登录函数
	 * 
	 */
	public function login(){
		$userInfo = $this->DB->execute("SELECT * FROM `user` WHERE `username`='" . $_POST['username'] . "' AND `password`='" . MD5($_POST['password']) . "' LIMIT 1");
		if($this->DB->count == 0){
		    return false;
		}
		return $userInfo;
	}
	
	/**
	 * @desc 保存用户信息
	 * @return bool
	 */
	public function save(){
	    
	    $userName = $this->DB->escape($_POST['username']);
	    $passWord = $this->DB->escape($_POST['password']);
	    $email	  = $this->DB->escape($_POST['email']);
	    
	    $sql = "INSERT INTO `user` (`username`, `password`, `email`) VALUES ('" . $userName . "', '" . md5($passWord) . "', '" . $email . "')";
	    return $this->DB->execute($sql);
	}
	
	/**
	 * @desc 检查用户名是否存在
	 * @return bool
	 */
	public function userExist(){
	    $this->DB->execute("SELECT * FROM `user` WHERE `username`='" . $this->DB->escape($_POST['username']) . "'");
	    if($this->DB->count > 0){
	        return true;
	    } else {
	        return false;
	    }
	}
}