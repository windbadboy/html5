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
<form action="?a=nav&m=update&id={$oneNav[0]->id}" name="update" method="post">
	<dl class="form">
		<dd>名　　称: {$oneNav[0]->name}</dd>
		<dd>简　　介: <textarea name="info">{$oneNav[0]->info}</textarea></dd>


		</dd>
		<dd><input type="submit" name="send" value="修改导航" onclick="return updateNav();" class="submit"></dd>
	</dl>
</form>
</body>
</html>