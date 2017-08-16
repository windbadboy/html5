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
	//增加一条记录
	public function add($_fields) {
		$_addData = array();
		if(!$this->_check->addCheck($this->_model,$_POST)) $this->check();
        $_addData = $this->selectData($_POST, $_fields);
		return $_addData;
	}
    //删除一条记录
	public function delete($_fields) {
        $_deleteData = array();
        $_deleteData = $this->selectData($_GET, $_fields);
        if(!$this->_check->deleteCheck($this->_model,$_deleteData)) $this->check();
        return $_deleteData;
	}
	
	public function one($_fields) {
	    $_oneData = array();
	    $_oneData = $this->selectData($_GET, $_fields);
	    if(!$this->_check->oneCheck($this->_model,$_oneData)) $this->check();
	    return $_oneData;
	}
	//检验数据全法性
	private function check() {
	    $this->_tpl = TPL::getInstance();
	    $this->_tpl->assign('errorinfo',$this->_check->getMessage());
	    $this->_tpl->assign('prev',tools::getPrevPage());
	    $this->_tpl->display(SMARTY_ADMIN.'public/error.tpl');
	    exit();
	}
	
	//筛选数据
	private function selectData($_requestData,$_fields) {
	    $_selectData = array();
	    foreach ($_requestData as $_key=>$_value) {
	        if(validate::inArray($_key, $_fields)) {
	            $_selectData[$_key] = $_value;
	        }
	    }
	    return $_selectData;
	}
	
}




?>