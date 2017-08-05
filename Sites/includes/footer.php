<?php
//防止恶意调用
	if(!defined(IN_TG)){
		echo 'illegal.';
		exit();
	}
	_close();

?>

	<div id="footer">
		<p>页面加载时间:<?php echo round(_runtime() - START_TIME,8) ?> 秒</p>
		<p>电脑版 | 移动版</p>
		<p>本程序由Ted制作,翻版必究.</p>
	</div>