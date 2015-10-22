<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>查询学生信息</title>
<link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>

<form action="/think2/index.php/Home/Index/Query" method="post">
<label for="sno">student no:</label>
<input type="text" name="sno">
<br>
<label for="sname">student name:</label>
<input type="text" name="sname">
<br>
<input type="submit" value="query">
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
    <td><?php echo ($vo["s_major"]); ?></td>
    <td><?php echo ($vo["s_dept"]); ?></td>
    <td><?php echo ($vo["s_age"]); ?></td>
    <td><?php echo ($vo["s_phone"]); ?></td>
    <td><?php echo ($vo["s_add"]); ?></td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
<p>
<a href="HomePage">返回首页</a>
</p>
</body>
</html>