<?php

/*
_runtime()获取当前时间（UNIX时间）
*/
function _runtime() {
	$_mtime = explode(' ', microtime());
	return $_mtime[1] + $_mtime[0];
}

?>