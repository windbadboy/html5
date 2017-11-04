<?php /* Smarty version 2.6.25-dev, created on 2017-11-04 08:08:18
         compiled from admin/public/admin.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Online Shop Background Management</title>
	<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />
	<link rel="stylesheet" type="text/css" href="view/admin/style/admin.css" />
	<script type="text/javascript" src="view/admin/js/iframe.js"></script>
	<script type="text/javascript" src="view/admin/js/channel.js"></script>	
</head>
<body>
<div id="header">
	<p>Hello,<?php echo $this->_tpl_vars['admin']['user']; ?>
 [<?php echo $this->_tpl_vars['admin']['level']; ?>
] [<a href="?a=index">去首页</a>] [<a href="?a=admin&m=logout">退出</a>]</p>
	<ul>
		<li class="first"><a href="?a=admin&m=main" target="in">起始页</a></li>
		<li><a href="javascript:channel(0)">商品</a></li>
		<li><a href="javascript:channel(1)">订单</a></li>
		<li><a href="javascript:channel(2)">会员</a></li>
		<li><a href="javascript:channel(3)">系统</a></li>
	</ul>
</div>
<div id="sidebar">
	<dl style="display:block">
		<dt>商品</dt>
			<dd><a href="?a=nav" target="in">导航条列表</a></dd>
			<dd><a href="?a=goods" target="in">商品列表</a></dd>
			<dd><a href="###">商品3</a></dd>
	</dl>
	<dl style="display:none">
		<dt>Order</dt>
			<dd><a href="###">order1</a></dd>
			<dd><a href="###">order2</a></dd>
			<dd><a href="###">order3</a></dd>
	</dl>
	<dl style="display:none">
		<dt>Member</dt>
			<dd><a href="###">member1</a></dd>
			<dd><a href="###">member2</a></dd>
			<dd><a href="###">member3</a></dd>
	</dl>
	<dl style="display:none">
		<dt>System</dt>
			<dd><a href="?a=manage" target="in">管理员列表</a></dd>
			<dd><a href="###">等级列表</a></dd>
			<dd><a href="###">权限管理</a></dd>
	</dl>
</div>
<div id="main">
	<iframe src="?a=admin&m=main" name="in" ></iframe>
</div>
</body>
</html>