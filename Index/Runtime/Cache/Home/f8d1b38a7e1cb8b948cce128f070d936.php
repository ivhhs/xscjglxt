<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>更改学生成绩</title>
</head>
<body>
<form action="/think2/index.php/Home/Grade/Alter" method="post">
<label for="sno">学生学号:</label>
<input type="text" name="sno">
<br>
<label for="cno">课程号:</label>
<input type="text" name="cno">
<br>
<label for="grade">成绩： </label>
<input type="text" name="grade">
<br>

<input type="submit" name = "更改">
<br>
</form>
<p>
 <a href="../Index/HomePage">返回首页</a>
 </p>
</body>
</html>