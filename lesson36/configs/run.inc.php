<?php

define('ROOT_PATH',substr(dirname(__FILE__),0,-8));
require ROOT_PATH.'/configs/profile.inc.php';
require ROOT_PATH.'/smarty/Smarty.class.php';
//require ROOT_PATH.'\TPL.class.php';

function __autoload($_className) {
	if(substr($_className,-6) == 'Action') {
		require ROOT_PATH.'/controller/'.$_className.'.class.php';
	} else if(substr($_className,-5) == 'Model') {
		require ROOT_PATH.'/model/'.$_className.'.class.php';		
	} else {
		require ROOT_PATH.'/public/'.$_className.'.class.php';		
	}
}

//单入口

Factory::setAction()->run();

?>