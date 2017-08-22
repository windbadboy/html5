<?php /* Smarty version 2.6.25-dev, created on 2017-08-22 17:08:17
         compiled from admin/nav/update.tpl */ ?>
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
<h2><a href="?a=nav">返回导航条列表</a>商品 -- 更新导航条</h2>
<form action="?a=nav&m=update&id=<?php echo $this->_tpl_vars['oneNav'][0]->id; ?>
" name="update" method="post">
	<dl class="form">
		<dd>名　　称: <?php echo $this->_tpl_vars['oneNav'][0]->name; ?>
</dd>
		<dd>简　　介: <textarea name="info"><?php echo $this->_tpl_vars['oneNav'][0]->info; ?>
</textarea></dd>


		</dd>
		<dd><input type="submit" name="send" value="修改导航" onclick="return updateNav();" class="submit"></dd>
	</dl>
</form>
</body>
</html>