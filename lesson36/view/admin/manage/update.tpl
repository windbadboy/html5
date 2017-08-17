<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Online Shop Background Management</title>
	<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />	
	<link rel="stylesheet" type="text/css" href="view/admin/style/manage.css" />
	<script type="text/javascript" src="view/admin/js/manage.js"></script>	


</head>
<body>
<h2><a href="?a=manage">Back to Manager List</a>System -- Update Manager</h2>
<form action="?a=manage&m=update&id={$oneManage[0]->id}" name="update" method="post">
	<dl class="form">
		<dd>用 户 名: {$oneManage[0]->user} ( * )</dd>
		<dd>密　　码: <input type="password" name="pass" class="text"> ( * )</dd>
		<dd>确认密码: <input type="password" name="repass" class="text"> ( * )</dd>		
		<dd>等　　级: <select name="level">
			<option value="0">--choose a level</option>
			{html_options options=$ALLlevel selected=$oneManage[0]->level}			
		</select> ( * )

		</dd>
		<dd><input type="submit" name="send" value="修改信息" class="submit" onclick="return updateManage();"></dd>
	</dl>
</form>
</body>
</html>