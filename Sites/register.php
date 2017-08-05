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
		// if(!($_POST['code'] == $_SESSION['code'])) {
		// 	_alert_back('verify code error.');
		// 	exit();
		// }
		// _check_code($_POST['code'],$_SESSION['code']);
		include ROOT_PATH."includes/register.func.php";
		$_clean = array();
		$_clean['uniqid'] = _check_uniqid($_POST['uniqid'],$_SESSION['uniqid']);
		$_clean['username'] = _check_username($_POST['username'],2,20);
		$_clean['password'] = _check_password($_POST['password'],$_POST['nopassword'],6);
		$_clean['question'] = _check_question($_POST['question'],4,20);
		$_clean['answer'] = _check_answer($_POST['question'],$_POST['answer'],4,20);
		$_clean['face'] = _check_face($_POST['face']);
		$_clean['sex'] = _check_sex($_POST['sex']);
		$_clean['email'] = _check_email($_POST['email']);
		$_clean['qq'] = _check_qq($_POST['qq']);
		$_clean['url'] = _check_url($_POST['url']);
//新增用户前进行用户名重命检查
		// $query = _query("SELECT tg_username from tg_user where tg_username='{$_clean['username']}'");
		// if (mysql_fetch_array($query,MYSQL_ASSOC)) {
		// 	_alert_back('注册名重复！');
		// 	exit();
		// }
		_is_repeat("SELECT tg_username from tg_user where tg_username='{$_clean['username']}'",'注册名重复！');
//新增用户
//在双引号里可以直接放变量，但如果是数组必须加上大括号。
		_query(
			"INSERT INTO tg_user (
							tg_uniqid,
							tg_active,
							tg_username,
							tg_password,
							tg_question,
							tg_answer,
							tg_face,
							tg_sex,
							tg_email,
							tg_qq,
							tg_url,
							tg_reg_time,
							tg_last_time,
							tg_last_ip
			)
						VALUES (
							'{$_clean['uniqid']}',
							'{$_clean['active']}',							
							'{$_clean['username']}',
							'{$_clean['password']}',
							'{$_clean['question']}',
							'{$_clean['answer']}',
							'{$_clean['face']}',
							'{$_clean['sex']}',
							'{$_clean['email']}',
							'{$_clean['qq']}',
							'{$_clean['url']}',
							now(),
							now(),
							'{$_SERVER['REMOTE_ADDR']}'														
						)") or die('wrong:'.mysql_error());
		//close db
		_close();
		//jump
		_location("Congratulations,you have registered successfully.","index.php");

	} else {
		$_SESSION['uniqid'] = $_uniqid = sha1(uniqid(rand(),true));
	}
?>
	<title>Document</title>
	<script type="text/javascript" src="js/register.js"></script>
</head>
<body>
<?php require ROOT_PATH."includes/header.php" ?>	
<div id="register">
	<h2>会员注册</h2>
	<form action="register.php?action=register"" method="post" name="register">
		<input type="hidden" name="uniqid" value="<?php echo $_uniqid ?>">
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
			<dd style="letter-spacing: 3.5px;">验证码:<input type="text" name="code" class="text yzm"><img src="code.php" alt="" id="code"></dd>
			<dd><input type="submit" name="submit" class="submit" value="注册"></dd>			
		</dl>
	</form>
</div>
<?php require ROOT_PATH."includes/footer.php" ?>
</body>
</html>