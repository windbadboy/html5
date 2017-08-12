<?php /* Smarty version 2.6.25-dev, created on 2017-08-12 11:34:01
         compiled from admin/public/succ.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="2;url=<?php echo $this->_tpl_vars['url']; ?>
" />
	<title>Online Shop Background Management</title>
	<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />	
	<link rel="stylesheet" type="text/css" href="view/admin/style/succ.css" />


</head>
<body>
<h2>成功 -- 提示信息</h2>
<div id="list" class="succ">
	<?php $_from = $this->_tpl_vars['message']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
?>
	<p><?php echo $this->_tpl_vars['key']+1; ?>
.<?php echo $this->_tpl_vars['value']; ?>
</p>
	<?php endforeach; endif; unset($_from); ?>	
	<p><a href=<?php echo $this->_tpl_vars['url']; ?>
>处理成功如未跳转页面，请点击跳转。</a></p>
</div>

</body>
</html>