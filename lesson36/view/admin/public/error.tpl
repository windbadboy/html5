<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Online Shop Background Management</title>
	<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />	
	<link rel="stylesheet" type="text/css" href="view/admin/style/error.css" />


</head>
<body>
<h2>Error -- Error info</h2>
<div id="list" class="error">
	{foreach from=$errorinfo key=key item=value}
	<p>{$key+1}.{$value}</p>
	{/foreach}
	<p><a href={$prev}>back</a></p>
</div>

</body>
</html>