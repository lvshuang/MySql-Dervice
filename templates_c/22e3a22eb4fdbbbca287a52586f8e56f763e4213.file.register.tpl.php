<?php /* Smarty version Smarty-3.0.9, created on 2012-02-15 23:15:18
         compiled from "E:/WAMP/web/cms/template/default/template/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188624f3bcc067f0674-03934677%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22e3a22eb4fdbbbca287a52586f8e56f763e4213' => 
    array (
      0 => 'E:/WAMP/web/cms/template/default/template/register.tpl',
      1 => 1329318914,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188624f3bcc067f0674-03934677',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('./template/default/common/header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<h1>注&nbsp;&nbsp;册</h1>

<div id="reg">
<form method="post" action="?action=user&method=register">
<ul>
	<li>用户：<input type="text" name="username" id="username" size="24" /><div class="errorMsg" id="userNameError"></div></li>
	<li>密码：<input type="password" name="password" id="password" size="24" /><div class="errorMsg" id="repasswordError"></div></li>
	<li>确认密码：<input type="password" name="password1" id="password1" size="24" /><div class="errorMsg" id="passwordError"></div></li>
	<li>邮箱：<input type="text" name="email" id="email" size="24" /><div class="errorMsg" id="emailError"></div></li>
	<li>请输入你看到的验证码：<input type="text" name="verify" id="verify" size="6" /><div class="errorMsg"></div></li>
	<li><input type="hidden" name="submit" id="submit" value="1" />
		<a href="#"><img src="./common/checkcode.php" alt="验证码" title="换一个" id="verifyImg"></a>
		<div class="errorMsg" id="verifyError"></div>
	</li>
	<li><input type="submit" name="submit" value="提交" /></li>
</ul>
</form>
</div>
<?php $_template = new Smarty_Internal_Template('./template/default/common/footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>