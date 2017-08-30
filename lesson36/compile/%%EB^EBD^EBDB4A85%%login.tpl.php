<?php /* Smarty version 2.6.25-dev, created on 2017-08-30 18:26:48
         compiled from admin/public/login.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>在线商城后台登录系统</title>
	<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />	
	<link rel="stylesheet" type="text/css" href="view/admin/style/login.css" />


</head>
<body>
<div id="login">
	<form action="?a=admin&m=login" method="post">
		<dl>
			<dd>管理员用户:<input type="text" name="user" class="text"></dd>
			<dd>管理员密码:<input type="text" name="user" class="text"></dd>
			<dd>验　证　码:<input type="text" name="user" class="text"></dd>
			<dd><img src="?a=index&m=validateCode"></dd>						
		</dl>
	</form>
</div>
</body>
</html>