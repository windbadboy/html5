<?php

class manageModel extends Model{
	public function __construct() {
		$this->_fields = array('id','user','pass','level','login_count','last_ip','last_login','reg_time');
		$this->_tables = array(DB_FREFIX.'manage');
		parent::__construct(Factory::setCheck(),$this,$this->_tables);
	}

	public function add($_postData='') {
		$_postData = $this->_request->add($this->_fields);
		$_postData['pass'] = md5($_postData['pass']);
		$_postData['last_ip'] = tools::getIP();
		$_postData['reg_time'] = tools::getDate();
		//print_r($_postData);
		return parent::add($_postData);
	}

	public function isOne($_isOneData,$_tables='') {
	    return parent::isOne($_isOneData);
	}

	public function isUser() {
		$this->_check->ajax($this);
	}
	
	public function findAll() {
		return parent::select(array('id','user','level','login_count','last_ip','last_login'),array('limit'=>$this->_limit,'order'=>'ORDER BY reg_time DESC'));
	}
	
	public function delete($_id) {
	    parent::delete($_id);
	}
	
	public function total() {
		return parent::total();
	}
	

}

?>