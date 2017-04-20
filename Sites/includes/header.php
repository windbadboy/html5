<?php
//防止恶意调用
	if(!defined(IN_TG)){
		echo 'illegal.';
		exit();
	}

?>



	<div id="header">
		<h1><a href="index.php">Multi User Comment System</a></h1>
		<ul>
			<li><a href="index.php">首页</a></li>
			<li><a href="register.php">注册</a></li>
			<li><a href="#">登录</a></li>
			<li><a href="#">个人中心</a></li>
			<li><a href="#">风格</a></li>
			<li><a href="#">管理</a></li>
			<li><a href="#">退出</a></li>
		</ul>
	</div>