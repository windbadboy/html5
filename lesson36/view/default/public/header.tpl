<div id="header">
	<h1><a href="./">重庆市第十三人民医院</a></h1>
</div>

<div id="nav">
	<ul>
		<li><a href="./">首页</a></li>
		{foreach from=$FrontTenNav item=value}
		<li><a href="?a=list&id={$value->id}">{$value->name}</a></li>
		{/foreach}
	</ul>
</div>

<div id="search">
	search
</div>