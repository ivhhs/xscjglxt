<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>系统登陆</title>
</head>
<body>
<form action="/think2/index.php/Home/Index/Login" method="post">
<label for="username">用户名：</label>
<input type="text" name="username">
<br>
<label for="password">密码：</label>
<input type="password" name="password">
<br>
<input type="submit" value="登陆">

</form>
</body>
</html>