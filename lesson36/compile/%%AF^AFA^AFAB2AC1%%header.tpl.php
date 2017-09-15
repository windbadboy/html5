<?php /* Smarty version 2.6.25-dev, created on 2017-09-15 08:51:53
         compiled from default/public/header.tpl */ ?>
<div id="header">
	<h1><a href="./">重庆市第十三人民医院</a></h1>
</div>

<div id="nav">
	<ul>
		<li><a href="./">首页</a></li>
		<?php $_from = $this->_tpl_vars['FrontTenNav']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
		<li><a href="?a=list&id=<?php echo $this->_tpl_vars['value']->id; ?>
"><?php echo $this->_tpl_vars['value']->name; ?>
</a></li>
		<?php endforeach; endif; unset($_from); ?>
	</ul>
</div>

<div id="search">
	search
</div>