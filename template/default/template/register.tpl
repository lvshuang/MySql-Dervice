{include file='./template/default/common/header.tpl'}
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
{include file='./template/default/common/footer.tpl'}