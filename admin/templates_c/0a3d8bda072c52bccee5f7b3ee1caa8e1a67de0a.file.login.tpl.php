<?php /* Smarty version Smarty-3.0.9, created on 2012-03-07 21:21:27
         compiled from "template/default/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57364f5760d780fde9-42217661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a3d8bda072c52bccee5f7b3ee1caa8e1a67de0a' => 
    array (
      0 => 'template/default/login.tpl',
      1 => 1331125112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57364f5760d780fde9-42217661',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("./common/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<fieldset>
    <legend>管理员登录</legend>
    <form action="./login.php" method="post" name="loginForm">
        <table>
            <tr>
                <td>用户名：</td>
                <td><input type="text" name="username" size="24" ></td>
            </tr>
            <tr>
                <td>密码：</td>
                <td><input type="password" name="password" size="24" /></td>
            </tr>

            <tr>
                <td colspan="1"></td>
                <td><input type="submit" name="submit" value="登录" /> </td>
            </tr>
        </table>
    </form>
</fieldset>