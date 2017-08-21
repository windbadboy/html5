<?php

class manageModel extends Model{
	public function __construct() {
		parent::__construct();
		$this->_fields = array('id','user','pass','level','login_count','last_ip','last_login','reg_time');
		$this->_tables = array(DB_FREFIX.'manage');

	}

	public function add($_n1='',$_postData='') {
	    //数据筛选
		$_postData = $this->getRequest()->add($this->_fields);
		//添加其它数据
		$_postData['pass'] = md5($_postData['pass']);
		$_postData['last_ip'] = tools::getIP();
		$_postData['reg_time'] = tools::getDate();
		//提交父类写入数据库;
		return parent::add($_postData);
	}



	public function isUser() {
		$this->_check->ajax($this);
	}
	
	public function findAll() {
	    $this->_tables = array(DB_FREFIX.'manage a',DB_FREFIX.'level b');
		return parent::select(array('a.id','user','level','login_count','last_ip','last_login','b.level_name'),array('on'=>'a.level=b.id','limit'=>$this->_limit,'order'=>'reg_time DESC'));
	}
	
	public function findOne() {
	    $_oneData = $this->getRequest()->one($this->_fields);
	    return parent::select(array('id','user','level','pass'),array('where'=>$_oneData,'limit'=>'1'));
	}
	
	public function delete($_n1='',$_deleteData='') {
	    $_deleteData = $this->getRequest()->delete($this->_fields);
	    return parent::delete($_deleteData);

	}
	
	
	public function update($_n3='',$_n1='',$_n2='') {

	    $_oneData = $this->getRequest()->one($this->_fields);
	    $_requestData = $this->getRequest()->update($this->_fields);
	    $_requestData['pass'] = md5($_requestData['pass']);
	    return parent::update($_oneData,$_requestData);
	    
	}
	
	public function total($_n1='') {
	    return parent::total($_n1='');
	}
	

}

?>