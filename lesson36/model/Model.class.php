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
		//$this->_check = Factory::setCheck();


	}

	protected function add($_postData) {
	    return $this->_DB->add($this->_tables,$_postData);
	}
	
	protected function update(array $_param,$_postData) {
	    return $this->_DB->update($this->_tables,$_param,$_postData);
	}
	

	
	protected function select($_fields,array $_param) {
	    return $this->_DB->select($this->_tables,$_fields,$_param);
	}
	
	protected function nextId() {
		return $this->_DB->nextId($this->_tables);
	}
	

	
	protected function total($_param = array()) {
	    return $this->_DB->total($this->_tables,$_param);
	}
	
	protected function getRequest() {
	    return request::getInstance($this->_check,$this);
	}
	
	
	//删除指定数据
	public function delete(Array $_param) {
	    return $this->_DB->delete($this->_tables,$_param);
	}
	public function isOne(array $_param) {
	    return $this->_DB->isOne($this->_tables,$_param);
	}
	public function setLimit($_limit) {
		$this->_limit = $_limit;
	}
}

?>