<?php

class request {
	static private $_instance = null;
	static public function getInstance() {
		if(!(self::$_instance instanceof self))
		    {self::$_instance = new self();}
		return self::$_instance;
	}
	private function __construct() {}
	private function __clone() {}
	public function add($_fields) {
		$_addData = array();
		foreach ($_POST as $key => $value) {
			if(validate::inArray($key, $_fields)) {
				$_addData[$key] = $value;
			}
		}
		return $_addData;
	}

	
}




?>