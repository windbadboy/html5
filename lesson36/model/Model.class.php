<?php

class Model extends DB{
	protected $_DB;
	protected $_fields = array();
	protected $_tables = array();
	protected $_request = null;
	protected $_check = null;
	protected $_limit ='';
	protected function __construct() {
		$this->_DB = parent::getInstance($this->_tables);
		$this->_check = Factory::setCheck();
		$this->_request = request::getInstance($this->_check,$this);

	}

	protected function add($_postData) {
		return $this->_DB->add($_postData);
	}
	
	protected function update($_oneData,$_postData) {
		return $this->_DB->update($_oneData,$_postData);
	}

	protected function isOne($_isOneData) {
	    return $this->_DB->isOne($_isOneData);
	}
	
	protected function select($_fields,$_param = array()) {
		return $this->_DB->select($_fields,$_param);
	}
	
	protected function delete($_deleteData='') {
	    return $this->_DB->delete($_deleteData);
	}
	
	protected function total() {
		return $this->_DB->total();
	}
	
	public function setLimit($_limit) {
		$this->_limit = $_limit;
	}
}

?>