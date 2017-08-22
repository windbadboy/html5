<?php

class Model extends DB{
	protected $_DB;
	protected $_fields = array();
	protected $_tables = array();
	protected $_request = null;
	protected $_check = null;
	protected $_limit ='';
	protected function __construct() {
		$this->_DB = parent::getInstance();
		$this->_check = Factory::setCheck();


	}

	protected function add($_postData) {
	    return $this->_DB->add($this->_tables,$_postData);
	}
	
	protected function update($_oneData,$_postData) {
	    return $this->_DB->update($this->_tables,$_oneData,$_postData);
	}
	

	
	protected function select($_fields,$_param = array()) {
	    return $this->_DB->select($this->_tables,$_fields,$_param);
	}
	
	protected function nextId() {
		return $this->_DB->nextId($this->_tables);
	}
	

	
	protected function total() {
	    return $this->_DB->total($this->_tables);
	}
	
	protected function getRequest() {
	    return request::getInstance($this->_check,$this);
	}
	
	
	//删除指定数据
	public function delete() {
	    $_deleteData = $this->getRequest()->delete($this->_fields);
	    return $this->_DB->delete($this->_tables,$_deleteData);
	}
	
	public function isOne($_isOneData) {
	    return $this->_DB->isOne($this->_tables,$_isOneData);
	}
	public function setLimit($_limit) {
		$this->_limit = $_limit;
	}
}

?>