<?
require dirname(__FILE__).'\configs\run.inc.php';

global $_tpl;
$_detail = new detailAction($_tpl);
$_detail->index();


?>