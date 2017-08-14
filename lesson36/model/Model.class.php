<?php

class Model extends DB{
	protected $_DB;
	protected $_fields = array();
	protected $_tables = array();
	protected $_request = null;
	protected $_check = null;
	protected $_limit ='';
	protected function __construct($_check = null,$_model = null,$_tables='') {
		$this->_DB = parent::getInstance($_tables);
		$this->_check = $_check;
		$this->_request = request::getInstance($_check,$_model);

	}

	protected function add($_postData) {
		return $this->_DB->add($_postData);
	}

	protected function isOne($_isOneData) {
	    return $this->_DB->isOne($_isOneData);
	}
	
	protected function select($_fields,$_param = array()) {
		return $this->_DB->select($_fields,$_param);
	}
	
	protected function delete($_id) {
	    return $this->_DB->delete($_id);
	}
	
	protected function total() {
		return $this->_DB->total();
	}
	
	public function setLimit($_limit) {
		$this->_limit = $_limit;
	}
}

?>