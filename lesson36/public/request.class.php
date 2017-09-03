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
	private function __construct() {
		if(isset($_GET)) $_GET = tools::setFormString($_GET);
		if(isset($_POST)) $_POST = tools::setFormString($_POST);
	}
	private function __clone() {}
	
	//处理登录
	public function login(array $_param) {
	        if(!$this->_check->loginCheck($this->_model,$_POST,$_param)) $this->check();

	    return true;

	}
	//增加一条记录
	public function add($_fields) {
		$_addData = array();

		if(!$this->_check->addCheck($this->_model,$_POST)) $this->check();
        $_addData = $this->selectData($_POST, $_fields);
        print_r($_addData);
		return $_addData;
	}
	
	//更新一条记录
	public function update($_fields) {	
		$_updateData = array();
		if(!$this->_check->updateCheck($this->_model,$_POST)) $this->check();
		$_updateData = $this->selectData($_POST, $_fields);
		return $_updateData;		
	}
	
    //删除一条记录
	public function delete($_fields) {
        $_deleteData = array();
        $_deleteData = $this->selectData($_GET, $_fields);
        if(!$this->_check->oneCheck($this->_model,$_deleteData)) $this->check();
        return $_deleteData;
	}


	
	//防注入检查
	public function getParam(array $_param) {
		$_finishParam=array();
		foreach ($_param as $_key=>$_value) {
			if($_key == 'in') $_value = str_replace(",", "','", $_value);
			$_finishParam[] = tools::setFormString($_value);
		}
		return $_finishParam;
	}
	
	//检查数据是否存在
	public function one(array $_param) {
	    //根据传递过来的$_fields组成只含有GET包含字段并且存在于$_fields的新数组
//	    $_oneData = $this->selectData($_GET, $_fields);
	    if(!$this->_check->oneCheck($this->_model,$_param)) $this->check();
	    //print_r($_oneData);
	}
	//检验数据全法性
	private function check() {
	    $this->_tpl = TPL::getInstance();
	    $this->_tpl->assign('errorinfo',$this->_check->getMessage());
	    $this->_tpl->assign('prev',tools::getPrevPage());
	    $this->_tpl->display(SMARTY_ADMIN.'public/error.tpl');
	    exit();
	}
	
	//筛选数据,返回新构建数组
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