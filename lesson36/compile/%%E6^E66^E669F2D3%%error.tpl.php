<?php /* Smarty version 2.6.25-dev, created on 2017-08-11 15:52:15
         compiled from admin/public/error.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Online Shop Background Management</title>
	<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />	
	<link rel="stylesheet" type="text/css" href="view/admin/style/error.css" />


</head>
<body>
<h2>Error -- Error info</h2>
<div id="list" class="error">
	<?php $_from = $this->_tpl_vars['errorinfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
?>
	<p><?php echo $this->_tpl_vars['key']+1; ?>
.<?php echo $this->_tpl_vars['value']; ?>
</p>
	<?php endforeach; endif; unset($_from); ?>
	<p><a href=<?php echo $this->_tpl_vars['prev']; ?>
>back</a></p>
</div>

</body>
</html>