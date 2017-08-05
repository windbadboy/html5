<?
define('ROOT_PATH',dirname(__FILE__));
//ÒýÈësmarty
require ROOT_PATH.'\smarty\Smarty.class.php';

//´´½¨smarty¶ÔÏó
$_smarty = new smarty();

//Ä£°åÄ¿Â¼
$_smarty->template_dir = ROOT_PATH.'/templates/';

//±àÒëÄ¿Â¼
$_smarty->compile_dir = ROOT_PATH.'/templates_c/';

//ÅäÖÃ±äÁ¿Ä¿Â¼
$_smarty->config_dir = ROOT_PATH.'/config/';

//»º´æÄ¿Â¼
$_smarty->cache_dir = ROOT_PATH.'/cache/';


//是否开启缓存
$_smarty->caching = 1;
?>