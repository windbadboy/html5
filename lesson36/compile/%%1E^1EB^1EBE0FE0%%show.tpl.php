<?php /* Smarty version 2.6.25-dev, created on 2017-08-25 19:31:00
         compiled from admin/nav/show.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Online Shop Background Management</title>
	<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />	
	<link rel="stylesheet" type="text/css" href="view/admin/style/nav.css" />


</head>
<body>
<h2><a href="?a=nav&m=add">增加导航条</a>商品 -- 导航条列表</h2>
<div id="list">
	<form action="?a=nav&m=sort" method="post">
	<table>
		<tr><th>名称</th><th>简介</th><th>子类</th><th>排序</th><th>操作</th></tr>
		<?php $_from = $this->_tpl_vars['ALLNav']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
		<tr><td><?php echo $this->_tpl_vars['item']->name; ?>
</td><td><?php echo $this->_tpl_vars['item']->info; ?>
</td><td><a href="?a=nav&sid=<?php echo $this->_tpl_vars['item']->id; ?>
">查看</a> | <a href="?a=nav&m=add&id=<?php echo $this->_tpl_vars['item']->id; ?>
">添加</a></td><td><input type="text"class="sort" name="sort[<?php echo $this->_tpl_vars['item']->id; ?>
]" value=<?php echo $this->_tpl_vars['item']->sort; ?>
></td><td><a href="?a=nav&m=update&id=<?php echo $this->_tpl_vars['item']->id; ?>
"><img src="view/admin/images/edit.gif" alt="edit" title="edit"></a> <a href="?a=nav&m=delete&id=<?php echo $this->_tpl_vars['item']->id; ?>
" onclick="return confirm('你真的要删除吗？') ? true : false"><img src="view/admin/images/drop.gif" alt="delete" title="delete"></a></td></tr>	
		<?php endforeach; else: ?>
		<tr><td colspan="5">没有数据！</td></tr>
		<?php endif; unset($_from); ?>	
		<?php if ($this->_tpl_vars['ALLNav']): ?><tr><td></td><td></td><td></td><td><input type="submit" value="排序" name="send"></td><td></td></tr><?php endif; ?>
		<?php if ($this->_tpl_vars['oneNav']): ?><tr><td colspan="5">主类名称:[<?php echo $this->_tpl_vars['oneNav'][0]->name; ?>
] [<a href="?a=nav">返回</a>]</td></tr><?php endif; ?>
	</table>
	</form>
</div>
<div id="page"><?php echo $this->_tpl_vars['page']; ?>
</div>
</body>
</html>