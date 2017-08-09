<?php

class Action {
	protected  $_tpl;
	protected $_model;
	protected $_check;
	public function __construct(&$_model = null,&$_check = null) {
		$this->_tpl = TPL::getInstance();
		$this->_model = $_model;
		$this->_check = $_check;
	}
	public function run() {
		$_m = isset($_GET['m']) ? $_GET['m'] : 'index';
		method_exists($this, $_m) ? eval('$this->'.$_m.'();') : $this->index();
	}
}

?>