<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>删除学生信息</title>
</head>
<body>
<form action="/think2/index.php/Home/Index/Delete" method="post">
<label for="sno">学生学号:</label>
<input type="text" name="sno">
<br>

<input type="submit" value="删除学生信息">
</form>
<p>
<a href="HomePage">返回首页</a>
</p>
</body>
</html>