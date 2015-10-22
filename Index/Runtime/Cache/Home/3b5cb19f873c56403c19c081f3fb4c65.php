<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>更改学生信息</title>
</head>
<body>
<h2>请输入学生信息</h2>
<form action="/think2/index.php/Home/Index/Alter" method="post">
<label for="sno">student no:</label>
<input type="text" name="sno">
<br>
<label for="sname">student name:</label>
<input type="text" name="sname">
<br>
<label for="ssex">student sex:</label>
<input type="text" name="ssex">
<br>
<label for="sclass">student class:</label>
<input type="text" name="sclass">
<br>
<label for="smajor">student major:</label>
<input type="text" name="smajor">
<br>
<label for="sdept">student dept:</label>
<input type="text" name="sdept">
<br>
<label for="sage">student age:</label>
<input type="text" name="sage">
<br>
<label for="sphone">student phone:</label>
<input type="text" name="sphone">
<br>
<label for="sadd">student address:</label>
<input type="text" name="sadd">
<br>
<input type="submit" value="确认修改">
</form>
<table border="1">
  <tr>
    <th>学号</th>
    <th>姓名</th>
    <th>性别</th>
    <th>班级</th>
    <th>专业</th>
    <th>系别</th>
    <th>年龄</th>
    <th>手机</th>
     <th>地址</th> 
  </tr>
<?php if(is_array($msg)): $i = 0; $__LIST__ = $msg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
    <td><?php echo ($vo["s_no"]); ?></td>
    <td><?php echo ($vo["s_name"]); ?></td>
    <td><?php echo ($vo["s_sex"]); ?></td>
    <td><?php echo ($vo["s_class"]); ?></td>
    <td><?php echo ($vo["s_object"]); ?></td>
    <td><?php echo ($vo["s_dept"]); ?></td>
    <td><?php echo ($vo["s_age"]); ?></td>
    <td><?php echo ($vo["s_phone"]); ?></td>
    <td><?php echo ($vo["s_add"]); ?></td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table> 
<p>
<a href="HomePage">返回首页</a>
</body>
</html>