<?php /* Smarty version 2.6.25-dev, created on 2017-08-17 19:43:31
         compiled from admin/manage/add.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'admin/manage/add.tpl', 22, false),)), $this); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Online Shop Background Management</title>
	<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />	
	<link rel="stylesheet" type="text/css" href="view/admin/style/manage.css" />
	<script type="text/javascript" src="view/admin/js/ajax.js"></script>
	<script type="text/javascript" src="view/admin/js/manage.js"></script>

</head>
<body>
<h2><a href="?a=manage">Back to Manager List</a>System -- Add Manager</h2>
<form action="?a=manage&m=add" name="add" method="post">
<input type="hidden" id="flag" name="flag">
	<dl class="form">
		<dd>用 户 名: <input type="text" name="user" id="user" onblur="checkUser();" class="text"> ( * )</dd>
		<dd>密　　码: <input type="password" name="pass" class="text"> ( * )</dd>
		<dd>确认密码: <input type="password" name="repass" class="text"> ( * )</dd>		
		<dd>等　　级: <select name="level">
			<option value="0">--choose a level</option>
				<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['ALLlevel']), $this);?>
						
		</select> ( * )

		</dd>
		<dd><input type="submit" name="send" value="add new Manager" onclick="return addManage();" class="submit"></dd>
	</dl>
</form>
</body>
</html>