<!DOCTYPE html>
{config_load file='config.conf'}
<html>
<head>
	<title>{$title}</title>
</head>
<body>
<!--

-->
{section name=name loop=$array}
	{$array[name]}
{/section}
</body>
</html>