<?php

class Model extends DB{
	protected $_DB;
	protected $_fields = array();
	protected $_tables = array();
	protected function __construct() {
		$this->_DB = parent::getInstance();
	}

	protected function add($_postData,$_tables) {
		return $this->_DB->add($_postData,$_tables);
	}
}

?>