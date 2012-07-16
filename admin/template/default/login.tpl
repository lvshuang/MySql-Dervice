{include file="./common/header.tpl"}
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