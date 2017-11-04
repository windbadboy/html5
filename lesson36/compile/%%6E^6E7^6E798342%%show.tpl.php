<?php /* Smarty version 2.6.25-dev, created on 2017-11-04 08:16:13
         compiled from admin/goods/show.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Online Shop Background Management</title>
	<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />	
	<link rel="stylesheet" type="text/css" href="view/admin/style/goods.css" />


</head>
<body>
<h2><a href="?a=goods&m=add">商品列表</a>商品 -- 商品列表</h2>
<div id="list">
	<table>
		<tr><th>用户名</th><th>等级</th><th>登录次数</th><th>最后登录IP</th><th>最后登录</th><th>操作</th></tr>
		<?php $_from = $this->_tpl_vars['ALLManage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
?>
		<tr><td><?php echo $this->_tpl_vars['value']->user; ?>
</td><td><?php echo $this->_tpl_vars['value']->level_name; ?>
</td><td><?php echo $this->_tpl_vars['value']->login_count; ?>
</td><td><?php echo $this->_tpl_vars['value']->last_ip; ?>
</td><td><?php echo $this->_tpl_vars['value']->last_login; ?>
</td><td><a href="?a=manage&m=update&id=<?php echo $this->_tpl_vars['value']->id; ?>
"><img src="view/admin/images/edit.gif" alt="edit" title="edit"></a> <a href="?a=manage&m=delete&id=<?php echo $this->_tpl_vars['value']->id; ?>
" onclick="return confirm('你真的要删除吗？') ? true : false"><img src="view/admin/images/drop.gif" alt="delete" title="delete"></a></td></tr>
		<?php endforeach; else: ?>
		<tr><td colspan="6">没有数据!</td></tr>		
		<?php endif; unset($_from); ?>
	</table>
</div>
<div id="page"><?php echo $this->_tpl_vars['page']; ?>
</div>
</body>
</html>