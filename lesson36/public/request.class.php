<?php

class request {
	static private $_instance = null;
	private $_check = null;
	private $_tpl = null;
	private $_model = null;
	static public function getInstance(&$_check = null,$_model = null) {
		if(!(self::$_instance instanceof self))
		    {
		    	self::$_instance = new self();
		   		self::$_instance->_check = $_check;
		   		self::$_instance->_model = $_model;		    	
		    }

		return self::$_instance;
	}
	private function __construct() {}
	private function __clone() {}
	public function add($_fields) {
		$_addData = array();
		if(!$this->_check->check($this->_model)) {
			$this->_tpl = TPL::getInstance();
			$this->_tpl->assign('errorinfo',$this->_check->getMessage());
			$this->_tpl->assign('prev',tools::getPrevPage());
			$this->_tpl->display(SMARTY_ADMIN.'public/error.tpl');
			exit();
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