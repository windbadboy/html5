<div id="header">
	<h1><a href="./">重庆市第十三人民医院</a></h1>
</div>

<div id="nav">
	<ul>
		{if $smarty.get.id}
			<li><a href="./">首页</a></li>
		{else}
			<li><a href="./" class="strong">首页</a></li>		
		{/if}
		{foreach from=$FrontTenNav item=value}
		{if $value->id == $FrontNav[0]->id}
			<li><a href="?a=list&id={$value->id}" class="strong">{$value->name}</a></li>
		{else}
			<li><a href="?a=list&id={$value->id}">{$value->name}</a></li>
		{/if}	
		{/foreach}
	</ul>
</div>

<div id="search">
	search
</div>