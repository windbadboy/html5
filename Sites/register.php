<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<?php

	define('IN_TG','true');
	define('SCRIPT',"register");
	require dirname(__FILE).'/includes/common.php'; 
	require ROOT_PATH."includes/title.inc.php";


?>
	<title>Document</title>
</head>
<body>
<?php require ROOT_PATH."includes/header.php" ?>	
<div id="register">
	<h2>会员注册</h2>
	<form action="post.php" method="post">
		<dl>
			<dt>请认真填写以下内容</dt>
			<dd  style="letter-spacing: 3.5px;">用户名:<input type="text" name="username" class="text"></dd>
			<dd>密　　码:<input type="password" name="password" class="text"></dd>
			<dd>确认密码:<input type="password" name="password" class="text"></dd>
			<dd>密码提示:<input type="text" name="passt" class="text"></dd>
			<dd>密码回答:<input type="text" name="passh" class="text"></dd>
			<dd>性　　别:　　<input type="radio" name="sex" value="男" checked="true">男　　<input type="radio" name="sex" value="女">女</dd>
			<dd class="face"><img src="face/m01.gif" alt="头像选择" onclick="javascript:window.open('face.php','face','width=400,height=400,top=0,left=0',scrollbar=1)"></dd>
			<dd>电子邮件:<input type="text" name="email" class="text"></dd>
			<dd>　Q Q　:<input type="text" name="qq" class="text"></dd>
			<dd>主页地址:<input type="text" name="url" class="text"></dd>
			<dd style="letter-spacing: 3.5px;">验证码:<input type="text" name="text yzm" class="text yzm"></dd>
			<dd><input type="submit" name="submit" class="submit" value="注册"></dd>			
		</dl>
	</form>
</div>
<?php require ROOT_PATH."includes/footer.php" ?>
</body>
</html>