<?php

class Model extends DB{
	protected $_DB;
	protected $_fields = array();
	protected $_tables = array();
	protected $_request = null;
	protected $_check = null;
	protected function __construct($_check = null,$_model = null) {
		$this->_DB = parent::getInstance();
		$this->_check = $_check;
		$this->_request = request::getInstance($_check,$_model);

	}

	protected function add($_postData,$_tables) {
		return $this->_DB->add($_postData,$_tables);
	}

	protected function isOne($_where,$_tables) {
		return $this->_DB->isOne($_where,$_tables);
	}
}

?>