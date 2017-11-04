<?php /* Smarty version 2.6.25-dev, created on 2017-11-04 10:19:36
         compiled from admin/goods/add.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'admin/goods/add.tpl', 20, false),)), $this); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Online Shop Background Management</title>
	<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />	
	<link rel="stylesheet" type="text/css" href="view/admin/style/goods.css" />


</head>
<body>
<h2><a href="?a=goods">返回商品列表</a>商品 -- 增加商品</h2>
<form action="?a=goods&m=add" name="add" method="post">

	<dl class="form">
		<dd>商品类型:<select>
					<option selected="selected" value="0">--请选择商品类型--</option>
					<?php $_from = $this->_tpl_vars['goodsInfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
?>
						<optgroup label="<?php echo $this->_tpl_vars['value']->name; ?>
">
						<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['value']->child), $this);?>

					<?php endforeach; endif; unset($_from); ?>
		           </select><span class="red">[必填]</span>
		</dd>
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