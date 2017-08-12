<?php

class Action {
	protected  $_tpl;
	protected $_model;
	protected $_redirect = null;

	public function __construct($_model = null) {
		$this->_tpl = TPL::getInstance();
		$this->_model = $_model;
		$this->_redirect = redirect::getInstance($this->_tpl);

	}
	public function run() {
		$_m = isset($_GET['m']) ? $_GET['m'] : 'index';
		method_exists($this, $_m) ? eval('$this->'.$_m.'();') : $this->index();
	}
}

?>