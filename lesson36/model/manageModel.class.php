<?php

class manageModel extends Model{
	public function __construct() {
		parent::__construct(Factory::setCheck(),$this);
		$this->_fields = array('id','user','pass','level','login_count','last_ip','last_time','reg_time');
		$this->_tables = array(DB_FREFIX.'manage');
	}

	public function add() {
		$_postData = $this->_request->add($this->_fields);
		$_postData['pass'] = md5($_postData['pass']);
		$_postData['last_ip'] = tools::getIP();
		$_postData['reg_time'] = tools::getDate();
		//print_r($_postData);
		return parent::add($_postData,$this->_tables);
	}

	public function isOne($_where,$_tables='') {
		return parent::isOne($_where,$this->_tables);
	}

	public function isUser() {
		$this->_check->ajax($this);
	}
	

}

?>