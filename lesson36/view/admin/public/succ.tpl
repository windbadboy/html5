<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="2;url={$url}" />
	<title>Online Shop Background Management</title>
	<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />	
	<link rel="stylesheet" type="text/css" href="view/admin/style/succ.css" />


</head>
<body>
<h2>成功 -- 提示信息</h2>
<div id="list" class="succ">
	{foreach from=$message key=key item=value}
	<p>{$key+1}.{$value}</p>
	{/foreach}	
	<p><a href={$url}>处理成功如未跳转页面，请点击跳转。</a></p>
</div>

</body>
</html>