<?php /* Smarty version 2.6.25-dev, created on 2017-09-22 10:48:47
         compiled from default/public/list.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>在线商城系统</title>
	<link rel="stylesheet" type="text/css" href="view/default/style/basic.css" />
	<link rel="stylesheet" type="text/css" href="view/default/style/list.css" />

</head>
<body>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/public/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="sait">
当前位置:<a href="./">首页</a>&gt;<a href="?a=list&id=<?php echo $this->_tpl_vars['FrontMainNav'][0]->id; ?>
"><?php echo $this->_tpl_vars['FrontMainNav'][0]->name; ?>

</div>

<div id="sidebar">
	<h2>女士服装</h2>
	<ul>
		<?php $_from = $this->_tpl_vars['FrontChildNav']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
		<li><a href="###"><?php echo $this->_tpl_vars['value']->name; ?>
<span class="gray">(1000)</span></a></li>
		<?php endforeach; endif; unset($_from); ?>
	</ul>
</div>

<div id="main">
	main
</div>
</body>
</html>