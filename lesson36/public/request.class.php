<?php

class request {
	static private $_instance = null;
	private $_check = null;
	static public function getInstance(&$_check = null) {
		if(!(self::$_instance instanceof self))
		    {
		    	self::$_instance = new self();
		   		self::$_instance->_check = $_check;		    	
		    }

		return self::$_instance;
	}
	private function __construct() {}
	private function __clone() {}
	public function add($_fields) {
		$_addData = array();
		if(!$this->_check->check()) {
			
			exit(print_r($this->_check->getMessage()));
		}
		foreach ($_POST as $key => $value) {
			if(validate::inArray($key, $_fields)) {
				$_addData[$key] = $value;
			}
		}
		return $_addData;
	}

	
}




?>