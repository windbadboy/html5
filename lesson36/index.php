<?
require dirname(__FILE__).'\configs\run.inc.php';

global $_tpl;

$_index = new indexAction($_tpl);
$_index->index();

?>