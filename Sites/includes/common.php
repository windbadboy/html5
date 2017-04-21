<?php
//防止恶意调用
	if(!defined(IN_TG)){
		echo 'illegal.';
		exit();
	}

	if(PHP_VERSION< '5.1.0') {
	exit('too low php version.the version is '.PHP_VERSION);
}
define('ROOT_PATH', substr(dirname(__FILE__),0,-8));
require ROOT_PATH."includes/global.func.php";
define('START_TIME',_runtime());

?>