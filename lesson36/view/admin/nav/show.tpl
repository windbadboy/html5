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
		{foreach from=$ALLNav item=item}
		<tr><td>{$item->name}</td><td>{$item->info}</td><td>{if $oneNav}没有更多分类{else}<a href="?a=nav&sid={$item->id}">查看</a> | <a href="?a=nav&m=add&id={$item->id}">添加</a></td><td><input type="text"class="sort" name="sort[{$item->id}]" value={$item->sort}>{/if}</td><td><a href="?a=nav&m=update&id={$item->id}"><img src="view/admin/images/edit.gif" alt="edit" title="edit"></a> <a href="?a=nav&m=delete&id={$item->id}" onclick="return confirm('你真的要删除吗？') ? true : false"><img src="view/admin/images/drop.gif" alt="delete" title="delete"></a></td></tr>	
		{foreachelse}
		<tr><td colspan="5">没有数据！</td></tr>
		{/foreach}	
		{if $ALLNav}<tr><td></td><td></td><td></td><td><input type="submit" value="排序" name="send"></td><td></td></tr>{/if}
		{if $oneNav}<tr><td colspan="5">主类名称:[{$oneNav[0]->name}] [<a href="?a=nav">返回</a>]</td></tr>{/if}
	</table>
	</form>
</div>
<div id="page">{$page}</div>
</body>
</html>