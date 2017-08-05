<?php

class Action {
	protected  $_tpl;
	public function __construct() {
		$this->_tpl = TPL::getInstance();
	}
	public function run() {
		$_m = isset($_GET['m']) ? $_GET['m'] : 'index';
		method_exists($this, $_m) ? eval('$this->'.$_m.'();') : $this->index();
	}
}

?>