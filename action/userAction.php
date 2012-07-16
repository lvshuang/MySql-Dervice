<?php

class userAction extends Action
{
    // 默认操作，没有登录跳转到登录页面，登录之后跳转到已登录页面
    public function index ()
    {
        if (!isset($_SESSION['username']) || !isset($_SESSION['u_id'])) {
            $this->display('login.tpl');
        } else {
            // $this->display('userDetail.tpl'); 跳转到用户详细信息页面
            $this->display('logined.tpl');
        }
    
    }
    
    // 登录
    function login ()
    {
        if(!isset($_POST['submit'])){
            $this->display('login.tpl');
            exit;
        }
        $module = new userModule($this->registry);
        if (! $userInfo = $module->login()) {
            echo json_encode(array('0'));
        } else {
            $_SESSION['u_id'] = $userInfo['id'];
            $_SESSION['username'] = $userInfo['username'];
            // header('Location:index.php?action=article&method=article');
            echo json_encode(array('1'));
            ;
        }
    }
    // 注册
    public function register ()
    {
        if (!isset($_POST['submit'])) {
            $this->display('register.tpl');
        } else {
            $module = new userModule($this->registry);
            
           if (!checkUserName($_POST['username'])) {
               		echo "用户明不合法";
//                 echo json_encode(array('用户名称不合法！'));
                return;
            }
            
            if ($module->userExist()) {
                echo "用户名已经存在";
                //                 echo json_encode(array('用户名已经存在！'));
                return;
            }
            if (!checkPassword($_POST['password'])) {
                	echo "密码长度不正确";
//                 echo json_encode(array('密码长度不正确！'));
                return;
            }
            
           
            
            if (!checkEmail($_POST['email'])) {
                	echo "邮箱格式不正确";
//                 echo json_encode(array('邮箱格式不正确'));
                return;
            } 
            
            if ($module->save()) {
                //header('Location:index.php?action=user&method=login');
                //echo json_encode(array('1'));
            } else {
                echo "<script type='text/javascript'>alert('登录失败！')</script>";
                
               // echo json_encode(array('0'));
            }
        }
    }
    
    // 退出登录
    public function logOut ()
    {
        unset($_SESSION['u_id']);
        unset($_SESSION['username']);
        
        header('Location:index.php');
    }
}
?>