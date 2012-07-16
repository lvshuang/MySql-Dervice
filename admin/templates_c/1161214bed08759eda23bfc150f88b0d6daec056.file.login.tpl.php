<?php /* Smarty version Smarty-3.0.9, created on 2012-03-07 20:58:37
         compiled from "E:/WAMP/web/cms/admin/template/default/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:238574f575b7d94ad97-83943762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1161214bed08759eda23bfc150f88b0d6daec056' => 
    array (
      0 => 'E:/WAMP/web/cms/admin/template/default/login.tpl',
      1 => 1331125112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '238574f575b7d94ad97-83943762',
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