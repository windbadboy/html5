<?php
		session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<?php

	define('IN_TG','true');
	define('SCRIPT',"register");
	require dirname(__FILE__).'/includes/common.php'; 
	require ROOT_PATH."includes/title.inc.php";
	if($_GET['action'] == 'register') {
		if(!($_POST['yzm'] == $_SESSION['code'])) {
			_alert_back('verify code error.');
			exit();
		}
		include ROOT_PATH."includes/register.func.php";
		$_clean = array();
		$_clean['username'] = _check_username($_POST['username'],2,20);
		$_clean['password'] = _check_password($_POST['password'],$_POST['nopassword'],6);
		$_clean['question'] = _check_question($_POST['question'],4,20);
		$_clean['answer'] = _check_answer($_POST['question'],$_POST['answer'],4,20);
		$_clean['face'] = $_POST['face'];
		$_clean['sex'] = $_POST['sex'];
		$_clean['email'] = _check_email($_POST['email']);
		$_clean['qq'] = _check_qq($_POST['qq']);
		$_clean['url'] = _check_url($_POST['url']);
		print_r($_clean);
	}

?>
	<title>Document</title>
<script type="text/javascript" src="js/face.js"></script>
</head>
<body>
<?php require ROOT_PATH."includes/header.php" ?>	
<div id="register">
	<h2>会员注册</h2>
	<form action="register.php?action=register"" method="post" name="register">
		<dl>
			<dt>请认真填写以下内容</dt>
			<dd  style="letter-spacing: 3.5px;">用户名:<input type="text" name="username" class="text"></dd>
			<dd>密　　码:<input type="password" name="password" class="text"></dd>
			<dd>确认密码:<input type="password" name="nopassword" class="text"></dd>
			<dd>密码提示:<input type="text" name="question" class="text"></dd>
			<dd>密码回答:<input type="text" name="answer" class="text"></dd>
			<dd>性　　别:　　<input type="radio" name="sex" value="男" checked="true">男　　<input type="radio" name="sex" value="女">女</dd>
			<dd class="face"><input type="hidden" name='face'><img src="face/m01.gif" alt="头像选择" id="faceimg"></dd>
			<dd>电子邮件:<input type="text" name="email" class="text"></dd>
			<dd>　Q Q　:<input type="text" name="qq" class="text"></dd>
			<dd>主页地址:<input type="text" name="url" class="text" value="http://"></dd>
			<dd style="letter-spacing: 3.5px;">验证码:<input type="text" name="yzm" class="text yzm"><img src="code.php" alt="" id="code"></dd>
			<dd><input type="submit" name="submit" class="submit" value="注册"></dd>			
		</dl>
	</form>
</div>
<?php require ROOT_PATH."includes/footer.php" ?>
</body>
</html>