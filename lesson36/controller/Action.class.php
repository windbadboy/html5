<?php

class Action {
	protected  $_tpl;
	public function __construct() {
		$this->_tpl = TPL::getInstance();
	}
	public function run() {
		echo $_GET['a'];
	}

}

?>