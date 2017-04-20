<?php
	define('IN_TG','true');
	define('SCRIPT',"face");
	require dirname(__FILE).'/includes/common.php'; 
	require ROOT_PATH."includes/title.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>多用户留言系统--头像选择</title>

</head>
<body>
	<div id="face">
		<h3>选择头像</h3>
		<dl>
			<?php for($i=1;$i<10;$i++) {?>
			<dd><img src="face/m0<?php echo $i?>.gif" alt=""></dd>
			<?php }?>
		</dl>
	</div>
</body>
</html>