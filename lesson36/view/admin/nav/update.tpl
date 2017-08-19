<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Online Shop Background Management</title>
	<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />	
	<link rel="stylesheet" type="text/css" href="view/admin/style/nav.css" />



</head>
<body>
<h2><a href="?a=nav">返回导航条列表</a>商品 -- 更新导航条</h2>
<form action="?a=nav&m=update" name="update" method="post">
<input type="hidden" id="flag" name="flag">
	<dl class="form">
		<dd>名　　称: <input type="text" name="name" class="text"> ( * )</dd>
		<dd>简　　介: <textarea name="info"></textarea></dd>


		</dd>
		<dd><input type="submit" name="send" value="修改导航" onclick="return updateNav();" class="submit"></dd>
	</dl>
</form>
</body>
</html>