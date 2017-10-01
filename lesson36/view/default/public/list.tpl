<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>在线商城系统</title>
	<link rel="stylesheet" type="text/css" href="view/default/style/basic.css" />
	<link rel="stylesheet" type="text/css" href="view/default/style/list.css" />

</head>
<body>

{include file="default/public/header.tpl"}
<div id="sait">
当前位置:<a href="./">首页</a>
{foreach from=$FrontNav[0]->sait key=key item=value}
><a href="?a=list&id={$key}">{$value}</a>
{/foreach}
</div>

<div id="sidebar">
	<h2>{$FrontNav[0]->name}</h2>
	<ul>
		{foreach from=$FrontNav[0]->child item=value}
		<li><a href="?a=list&id={$value->id}">{$value->name}<span class="gray">(1000)</span></a></li>
		{/foreach}
	</ul>
</div>

<div id="main">
	main
</div>
</body>
</html>