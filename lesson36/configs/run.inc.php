<?php
error_reporting(E_ALL);
define('ROOT_PATH',substr(dirname(__FILE__),0,-8));

require ROOT_PATH.'/configs/profile.inc.php';
require ROOT_PATH.'/smarty/Smarty.class.php';
//require ROOT_PATH.'\TPL.class.php';
date_default_timezone_set('Asia/Shanghai');
function __autoload($_className) {
	if(substr($_className,-6) == 'Action') {
		require ROOT_PATH.'/controller/'.$_className.'.class.php';
	} else if(substr($_className,-5) == 'Model') {
		require ROOT_PATH.'/model/'.$_className.'.class.php';		
	}elseif(substr($_className,-5) == 'Check') {
		require ROOT_PATH.'/check/'.$_className.'.class.php';
	} else {
		require ROOT_PATH.'/public/'.$_className.'.class.php';		
	}
}

//one case mode

Factory::setAction()->run();

?>