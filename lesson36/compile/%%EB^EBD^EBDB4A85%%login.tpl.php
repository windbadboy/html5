<?php /* Smarty version 2.6.25-dev, created on 2017-09-01 14:07:48
         compiled from admin/public/login.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>在线商城后台登录系统</title>
	<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />	
	<link rel="stylesheet" type="text/css" href="view/admin/style/login.css" />
	<script type="text/javascript" src="view/admin/js/login.js"></script>

</head>
<body>
<div id="login">
	<form action="?a=admin&m=login" method="post" name="login">
		<dl>
			<dd>管理员用户:<input type="text" name="user" class="text"></dd>
			<dd>管理员密码:<input type="text" name="pass" class="text"></dd>
			<dd>验　证　码:<input type="text" name="code" class="text"></dd>
			<dd class="code"><img src="?a=index&m=validateCode" onclick="javascript:this.src='?a=index&m=validateCode&tm='+Math.random()"></dd>
			<dd><input type="submit" class="submit" name="send" value="登入管理中心" onclick="return adminLogin();"></dd>						
		</dl>
	</form>
</div>
</body>
</html>