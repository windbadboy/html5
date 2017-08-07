<?php

class Action {
	protected  $_tpl;
	protected $_model;
	public function __construct(&$_model = null) {
		$this->_tpl = TPL::getInstance();
		$this->_model = $_model;
	}
	public function run() {
		$_m = isset($_GET['m']) ? $_GET['m'] : 'index';
		method_exists($this, $_m) ? eval('$this->'.$_m.'();') : $this->index();
	}
}

?>