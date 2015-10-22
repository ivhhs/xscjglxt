<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>查询学生成绩</title> 
</head>
<body>
<form action="/think2/index.php/Home/Grade/Query" method="post">
<label for="sno">学生学号：</label>
<input type="text" name="sno">
<br>
<label for="sname">学生姓名：</label>
<input type="text" name="sname">
<input type="submit" name="查询">
</form>
<br>
<table border="1">
 <tr>
 <th>学号 </th>
 <th> 姓名</th>
 <th> 科目名称</th>
 <th> 科目教师</th>
 <th> 成绩</th>
 </tr>
 <?php if(is_array($msg)): $i = 0; $__LIST__ = $msg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
 <th><?php echo ($vo["s_no"]); ?></th>
 <th><?php echo ($vo["s_name"]); ?></th>
 <th><?php echo ($vo["c_name"]); ?></th>
 <th><?php echo ($vo["c_teacher"]); ?></th>
 <th><?php echo ($vo["grade"]); ?></th>
 </tr><?php endforeach; endif; else: echo "" ;endif; ?>
 </table>
 <p>
 <a href="../Index/HomePage">返回首页</a>
 </p>
</body>
</html>