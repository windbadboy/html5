<?php /* Smarty version 2.6.25-dev, created on 2017-08-21 15:28:29
         compiled from admin/nav/add.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Online Shop Background Management</title>
	<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />	
	<link rel="stylesheet" type="text/css" href="view/admin/style/nav.css" />
	<script type="text/javascript" src="view/admin/js/nav.js"></script>

</head>
<body>
<h2><a href="?a=nav">返回导航条列表</a>商品 -- 添加导航</h2>
<form action="?a=nav&m=add" name="add" method="post">
	<dl class="form">
		<dd>名　　称: <input type="text" name="name" class="text"> ( * )</dd>
		<dd><span class="middle">简　　介:</span><textarea name="info"></textarea></dd>


		</dd>
		<dd><input type="submit" name="send" value="新增导航" onclick="return addNav();" class="submit"></dd>
	</dl>
</form>
</body>
</html>