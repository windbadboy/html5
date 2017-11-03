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
	<ul style="margin:0 0 10px 0">
		{foreach from=$FrontNav[0]->child item=value}
		<li><a href="?a=list&id={$value->id}">{$value->name}<span class="gray">(1000)</span></a></li>
		{/foreach}
	</ul>
	<h2>当月热销</h2>
	<div style="margin:0 0 10px 0">
		<dl style="border-top:none">
		<dt><a href="###"><img src="view/default/images/pro_list_demo_small.jpg" alt="连衣裙" /></a></dt>
		<dd class="price">￥158.00</dd>
		<dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
		</dl>
		<dl>
		<dt><a href="###"><img src="view/default/images/pro_list_demo_small.jpg" alt="连衣裙" /></a></dt>
		<dd class="price">￥158.00</dd>
		<dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
		</dl>
		<dl>
		<dt><a href="###"><img src="view/default/images/pro_list_demo_small.jpg" alt="连衣裙" /></a></dt>
		<dd class="price">￥158.00</dd>
		<dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
		</dl>
		
		
		<p><a href="###">查看更多</a></p>		
	</div>
	<h2>浏览记录</h2>
	<div style="margin:0 0 10px 0">
		<dl style="border-top:none">
		<dt><a href="###"><img src="view/default/images/pro_list_demo_small.jpg" alt="连衣裙" /></a></dt>
		<dd class="price">￥158.00</dd>
		<dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
		</dl>
		<dl>
		<dt><a href="###"><img src="view/default/images/pro_list_demo_small.jpg" alt="连衣裙" /></a></dt>
		<dd class="price">￥158.00</dd>
		<dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
		</dl>
		<dl>
		<dt><a href="###"><img src="view/default/images/pro_list_demo_small.jpg" alt="连衣裙" /></a></dt>
		<dd class="price">￥158.00</dd>
		<dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
		</dl>	
		<p><a href="###">查看更多</a> <a href="###">清空</a></p>		
	</div>
</div>

<div id="main">
	<h2>商品筛选</h2>
	<div class="filter">
	<p>品牌: <span>全部</span> Apple 三星 华为 小米 魅族</p>
	<p>属性: <span>全部</span> 属性1 属性2 属性3 属性4 属性5</p>
	<p>价格: <span>全部</span> 500 - 1000 1001 - 2000 2001-3000</p>				
	</div>
	<h2>商品列表</h2>
	<div class="pro">
		<dl>
		<dt><a href="###"><img src="view/default/images/pro_list_demo.jpg" alt="连衣裙" /></a></dt>
		<dd class="price"><strong>￥158.00</strong> <del>￥258.00</del></dd>
		<dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
		<dd class="comment"><a href="###">已有36人购买</a></dd>
		<dd class="buy"><a href="###">购买</a> | <a href="###">收藏</a> | <a href="###">对比</a></dd>				
		</dl>
		<dl>
		<dt><a href="###"><img src="view/default/images/pro_list_demo.jpg" alt="连衣裙" /></a></dt>
		<dd class="price"><strong>￥158.00</strong> <del>￥258.00</del></dd>
		<dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
		<dd class="comment"><a href="###">已有36人购买</a></dd>
		<dd class="buy"><a href="###">购买</a> | <a href="###">收藏</a> | <a href="###">对比</a></dd>				
		</dl>
		<dl>
		<dt><a href="###"><img src="view/default/images/pro_list_demo.jpg" alt="连衣裙" /></a></dt>
		<dd class="price"><strong>￥158.00</strong> <del>￥258.00</del></dd>
		<dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
		<dd class="comment"><a href="###">已有36人购买</a></dd>
		<dd class="buy"><a href="###">购买</a> | <a href="###">收藏</a> | <a href="###">对比</a></dd>				
		</dl>
		<dl>
		<dt><a href="###"><img src="view/default/images/pro_list_demo.jpg" alt="连衣裙" /></a></dt>
		<dd class="price"><strong>￥158.00</strong> <del>￥258.00</del></dd>
		<dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
		<dd class="comment"><a href="###">已有36人购买</a></dd>
		<dd class="buy"><a href="###">购买</a> | <a href="###">收藏</a> | <a href="###">对比</a></dd>				
		</dl>
		<dl>
		<dt><a href="###"><img src="view/default/images/pro_list_demo.jpg" alt="连衣裙" /></a></dt>
		<dd class="price"><strong>￥158.00</strong> <del>￥258.00</del></dd>
		<dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
		<dd class="comment"><a href="###">已有36人购买</a></dd>
		<dd class="buy"><a href="###">购买</a> | <a href="###">收藏</a> | <a href="###">对比</a></dd>				
		</dl>
		<dl>
		<dt><a href="###"><img src="view/default/images/pro_list_demo.jpg" alt="连衣裙" /></a></dt>
		<dd class="price"><strong>￥158.00</strong> <del>￥258.00</del></dd>
		<dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
		<dd class="comment"><a href="###">已有36人购买</a></dd>
		<dd class="buy"><a href="###">购买</a> | <a href="###">收藏</a> | <a href="###">对比</a></dd>				
		</dl>
		<dl>
		<dt><a href="###"><img src="view/default/images/pro_list_demo.jpg" alt="连衣裙" /></a></dt>
		<dd class="price"><strong>￥158.00</strong> <del>￥258.00</del></dd>
		<dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
		<dd class="comment"><a href="###">已有36人购买</a></dd>
		<dd class="buy"><a href="###">购买</a> | <a href="###">收藏</a> | <a href="###">对比</a></dd>				
		</dl>
		<dl>
		<dt><a href="###"><img src="view/default/images/pro_list_demo.jpg" alt="连衣裙" /></a></dt>
		<dd class="price"><strong>￥158.00</strong> <del>￥258.00</del></dd>
		<dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
		<dd class="comment"><a href="###">已有36人购买</a></dd>
		<dd class="buy"><a href="###">购买</a> | <a href="###">收藏</a> | <a href="###">对比</a></dd>				
		</dl>
		<dl>
		<dt><a href="###"><img src="view/default/images/pro_list_demo.jpg" alt="连衣裙" /></a></dt>
		<dd class="price"><strong>￥158.00</strong> <del>￥258.00</del></dd>
		<dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
		<dd class="comment"><a href="###">已有36人购买</a></dd>
		<dd class="buy"><a href="###">购买</a> | <a href="###">收藏</a> | <a href="###">对比</a></dd>				
		</dl>
		<dl>
		<dt><a href="###"><img src="view/default/images/pro_list_demo.jpg" alt="连衣裙" /></a></dt>
		<dd class="price"><strong>￥158.00</strong> <del>￥258.00</del></dd>
		<dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
		<dd class="comment"><a href="###">已有36人购买</a></dd>
		<dd class="buy"><a href="###">购买</a> | <a href="###">收藏</a> | <a href="###">对比</a></dd>				
		</dl>
		<dl>
		<dt><a href="###"><img src="view/default/images/pro_list_demo.jpg" alt="连衣裙" /></a></dt>
		<dd class="price"><strong>￥158.00</strong> <del>￥258.00</del></dd>
		<dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
		<dd class="comment"><a href="###">已有36人购买</a></dd>
		<dd class="buy"><a href="###">购买</a> | <a href="###">收藏</a> | <a href="###">对比</a></dd>				
		</dl>
		<dl>
		<dt><a href="###"><img src="view/default/images/pro_list_demo.jpg" alt="连衣裙" /></a></dt>
		<dd class="price"><strong>￥158.00</strong> <del>￥258.00</del></dd>
		<dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
		<dd class="comment"><a href="###">已有36人购买</a></dd>
		<dd class="buy"><a href="###">购买</a> | <a href="###">收藏</a> | <a href="###">对比</a></dd>				
		</dl>
		<dl>
		<dt><a href="###"><img src="view/default/images/pro_list_demo.jpg" alt="连衣裙" /></a></dt>
		<dd class="price"><strong>￥158.00</strong> <del>￥258.00</del></dd>
		<dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
		<dd class="comment"><a href="###">已有36人购买</a></dd>
		<dd class="buy"><a href="###">购买</a> | <a href="###">收藏</a> | <a href="###">对比</a></dd>				
		</dl>
		<dl>
		<dt><a href="###"><img src="view/default/images/pro_list_demo.jpg" alt="连衣裙" /></a></dt>
		<dd class="price"><strong>￥158.00</strong> <del>￥258.00</del></dd>
		<dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
		<dd class="comment"><a href="###">已有36人购买</a></dd>
		<dd class="buy"><a href="###">购买</a> | <a href="###">收藏</a> | <a href="###">对比</a></dd>				
		</dl>
		<dl>
		<dt><a href="###"><img src="view/default/images/pro_list_demo.jpg" alt="连衣裙" /></a></dt>
		<dd class="price"><strong>￥158.00</strong> <del>￥258.00</del></dd>
		<dd class="title"><a href="###">春秋装韩版蕾丝打底长袖修身性感连衣裙品质显瘦女裙子</a></dd>
		<dd class="comment"><a href="###">已有36人购买</a></dd>
		<dd class="buy"><a href="###">购买</a> | <a href="###">收藏</a> | <a href="###">对比</a></dd>				
		</dl>								
	</div>
</div>
</body>
</html>