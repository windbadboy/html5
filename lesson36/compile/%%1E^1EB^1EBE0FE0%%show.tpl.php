<?php /* Smarty version 2.6.25-dev, created on 2017-08-19 11:17:14
         compiled from admin/nav/show.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Online Shop Background Management</title>
	<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />	
	<link rel="stylesheet" type="text/css" href="view/admin/style/nav.css" />


</head>
<body>
<h2><a href="?a=nav&m=add">增加导航条</a>商品 -- 导航条列表</h2>
<div id="list">
	<table>
		<tr><th>名称</th><th>简介</th><th>子类</th><th>排序</th><th>操作</th></tr>
	</table>
</div>
<div id="page"><?php echo $this->_tpl_vars['page']; ?>
</div>
</body>
</html>