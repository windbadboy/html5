<?php /* Smarty version 2.6.25-dev, created on 2017-09-21 08:54:54
         compiled from default/public/header.tpl */ ?>
<div id="header">
	<h1><a href="./">重庆市第十三人民医院</a></h1>
</div>

<div id="nav">
	<ul>
		<?php if ($_GET['id']): ?>
			<li><a href="./">首页</a></li>
		<?php else: ?>
			<li><a href="./" class="strong">首页</a></li>		
		<?php endif; ?>
		<?php $_from = $this->_tpl_vars['FrontTenNav']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
		<?php if ($_GET['id'] == $this->_tpl_vars['value']->id): ?>
			<li><a href="?a=list&id=<?php echo $this->_tpl_vars['value']->id; ?>
" class="strong"><?php echo $this->_tpl_vars['value']->name; ?>
</a></li>
		<?php else: ?>
			<li><a href="?a=list&id=<?php echo $this->_tpl_vars['value']->id; ?>
"><?php echo $this->_tpl_vars['value']->name; ?>
</a></li>
		<?php endif; ?>	
		<?php endforeach; endif; unset($_from); ?>
	</ul>
</div>

<div id="search">
	search
</div>