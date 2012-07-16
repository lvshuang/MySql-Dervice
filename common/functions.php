<?php
/**
 * @desc 判断用户是否登录
 * @return boolean
 */
function isLogined(){
	return (isset($_SESSION['username']) && isset($_SESSION['u_id']));
}

/**
 * @desc 判断用户名的合法性
 * @param String 用户输入的用户名
 * @return bool
 */
function checkUserName($userName){
    $patten = "/^\w+$/";
    
    return preg_match($patten, $userName);
}

/**
 * @desc 检测密码长度
 * @param String 用户输入密码
 * @return bool
 */
function checkPassword($password){
    if(strlen($password) >24 && strlen($password)< 8){
        return false;
    }else{
        return true;
    }
}

/**
 * @desc 检查邮箱是否合法
 * @param 邮箱名称
 * @return bool
 */
function checkEmail($email){
    return preg_match("/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/", $email);
}
?>