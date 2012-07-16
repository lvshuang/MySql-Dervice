<?php /* Smarty version Smarty-3.0.9, created on 2012-02-04 19:25:33
         compiled from "E:/WAMP/web/cms/template/default/template/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:292744f2d15ad8977c9-02772257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eef61cb6dd23df947120bd32520908a9c586092f' => 
    array (
      0 => 'E:/WAMP/web/cms/template/default/template/login.tpl',
      1 => 1328353964,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '292744f2d15ad8977c9-02772257',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('./template/default/common/header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<h1>登&nbsp;&nbsp;录</h1>
<div class="errorMsg">用户名错误</div>

<ul>
	<li>用户：<input type="text" name="username" id="username" size="24" /></li>
	<li>密码：<input type="password" name="password" id="password" size="24" /></li>
	<li><a href=""><img src="./template/default/images/login.png" id="loginImg" /></a></li>
</ul>
<?php $_template = new Smarty_Internal_Template('./template/default/common/footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>