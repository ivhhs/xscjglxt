<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>删除学生成绩</title>
</head>
<body>
<form action="/think2/index.php/Home/Grade/Delete" method="post">
<label for="sno">学生学号：</label>
<input type="text" name="sno">
<br>
<label for="cno">课程号：</label>
<input type="text" name="cno">
<br>
<input type="submit" name="删除学生成绩">
</form>
<p>
 <a href="../Index/HomePage">返回首页</a>
 </p>
</body>
</html>