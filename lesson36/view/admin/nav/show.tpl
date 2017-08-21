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
	<table>
		<tr><th>名称</th><th>简介</th><th>子类</th><th>排序</th><th>操作</th></tr>
		{foreach from=$ALLNav item=item}
		<tr><td>{$item->name}</td><td>{$item->info}</td><td>{$item->sid}</td><td>{$item->sort}</td><td><a href="?a=nav&m=update&id={$item->id}"><img src="view/admin/images/edit.gif" alt="edit" title="edit"></a> <a href="?a=nav&m=delete&id={$item->id}" onclick="return confirm('你真的要删除吗？') ? true : false"><img src="view/admin/images/drop.gif" alt="delete" title="delete"></a></td></tr>	
		{foreachelse}
		<tr><td colspan="5">没有数据！</td></tr>
		{/foreach}	
	</table>
</div>
<div id="page">{$page}</div>
</body>
</html>