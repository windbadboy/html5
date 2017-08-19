<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Online Shop Background Management</title>
	<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />	
	<link rel="stylesheet" type="text/css" href="view/admin/style/manage.css" />


</head>
<body>
<h2><a href="?a=manage&m=add">增加管理员</a>系统 -- 管理员列表</h2>
<div id="list">
	<table>
		<tr><th>用户名</th><th>等级</th><th>登录次数</th><th>最后登录IP</th><th>最后登录</th><th>操作</th></tr>
		{foreach from=$ALLManage key=key item=value}
		<tr><td>{$value->user}</td><td>{$value->level_name}</td><td>{$value->login_count}</td><td>{$value->last_ip}</td><td>{$value->last_time}</td><td><a href="?a=manage&m=update&id={$value->id}"><img src="view/admin/images/edit.gif" alt="edit" title="edit"></a> <a href="?a=manage&m=delete&id={$value->id}" onclick="return confirm('你真的要删除吗？') ? true : false"><img src="view/admin/images/drop.gif" alt="delete" title="delete"></a></td></tr>
		{foreachelse}
		<tr><td colspan="6">没有数据!</td></tr>		
		{/foreach}
	</table>
</div>
<div id="page">{$page}</div>
</body>
</html>