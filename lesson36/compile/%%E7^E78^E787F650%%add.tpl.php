<?php /* Smarty version 2.6.25-dev, created on 2017-08-19 12:42:34
         compiled from admin/nav/add.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Online Shop Background Management</title>
	<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />	
	<link rel="stylesheet" type="text/css" href="view/admin/style/nav.css" />


</head>
<body>
<h2><a href="?a=nav">返回导航条列表</a>商品 -- 添加导航</h2>
<form action="?a=nav&m=add" name="nav" method="post">
<input type="hidden" id="flag" name="flag">
	<dl class="form">
		<dd>名　　称: <input type="text" name="name" class="text"> ( * )</dd>
		<dd><span class="middle">简　　介:</span><textarea name="info"></textarea></dd>


		</dd>
		<dd><input type="submit" name="send" value="新增导航" onclick="return addNav();" class="submit"></dd>
	</dl>
</form>
</body>
</html>