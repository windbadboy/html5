<?php

class manageModel extends Model{
	public function __construct() {
		$this->_fields = array('id','user','pass','level','login_count','last_ip','last_login','reg_time');
		$this->_tables = array(DB_FREFIX.'manage');
		parent::__construct();
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
		return parent::select(array('id','user','level','login_count','last_ip','last_login'),array('limit'=>$this->_limit,'order'=>'reg_time DESC'));
	}
	
	public function findOne() {
	    $_oneData = $this->_request->one($this->_fields);
	    return parent::select(array('id','user','level','pass'),array('where'=>$_oneData,'limit'=>'1'));
	}
	
	public function delete($_deleteData='') {
	    $_deleteData = $this->_request->delete($this->_fields);
	    return parent::delete($_deleteData);

	}
	
	
	public function update() {

	    $_oneData = $this->_request->one($this->_fields);
	    
	}
	
	public function total() {
		return parent::total();
	}
	

}

?>