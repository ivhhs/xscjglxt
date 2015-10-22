<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>系统登陆</title>
<link rel="stylesheet" type="text/css" href="style.css" /></link>
</head>
<body>
<h2>欢迎登陆学生成绩管理系统</h2>

<p>
小组成员：
吴婷
李青
苗胜龙

</p>
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