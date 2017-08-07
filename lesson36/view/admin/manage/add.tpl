<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Online Shop Background Management</title>
	<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />	
	<link rel="stylesheet" type="text/css" href="view/admin/style/manage.css" />


</head>
<body>
<h2><a href="?a=manage">Back to Manager List</a>System -- Add Manager</h2>
<form action="?a=manage&m=add" method="post">
	<dl class="form">
		<dd>用户名: <input type="text" name="user" class="text"></dd>
		<dd>密　码: <input type="password" name="pass" class="text"></dd>
		<dd>等　级:<select name="level">
			<option value="0">--choose a level</option>
			<option value="1">超级管理员</option>
			<option value="2">普通管理员</option>
			<option value="3">商品发布专员</option>
			<option value="4">订单处理专员</option>
		</select>

		</dd>
		<dd><input type="submit" name="send" value="add new Manager" class="submit"></dd>
	</dl>
</form>
</body>
</html>