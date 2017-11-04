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
					{foreach from=$goodsInfo key=key item=value}
						<optgroup label="{$value->name}">
						{html_options options=$value->child}
					{/foreach}
		           </select><span class="red">[必填]</span>
		</dd>
		<dd>密　　码: <input type="password" name="pass" class="text"> ( * )</dd>
		<dd>确认密码: <input type="password" name="repass" class="text"> ( * )</dd>		
		<dd>等　　级: <select name="level">
			<option value="0">--choose a level</option>
				{html_options options=$ALLlevel}						
		</select> ( * )

		</dd>
		<dd><input type="submit" name="send" value="add new Manager" onclick="return addManage();" class="submit"></dd>
	</dl>
</form>
</body>
</html>