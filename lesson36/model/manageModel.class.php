<?php

class manageModel extends Model{

	public function __construct() {
		parent::__construct();
		$this->_fields = array('id','user','pass','level','login_count','last_ip','last_login','reg_time');
		$this->_tables = array(DB_FREFIX.'manage');
        $this->_check = new ManageCheck();
        list(
        		$this->_R['id'],
        		$this->_R['user'],
        		$this->_R['pass'],
        		$this->_R['code']
        	) =  $this->getRequest()->getParam(
        			array(
        					isset($_GET['id']) ? $_GET['id'] : null,
        					isset($_POST['user']) ? $_POST['user'] : null,
        					isset($_POST['pass']) ? $_POST['pass'] : null,
        					isset($_POST['code']) ? $_POST['code'] : null        					
        			));
	}

	public function add($_n1='',$_postData='') {
		$_where = array("user='{$this->_R['user']}'");
	    //检查重复名
	    if(!$this->_check->addCheck($this,$_where)) $this->_check->error();
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
//	    $_oneData = $this->getRequest()->one($this->_fields);
		//防注入检查，返回数组
//		list($_id) = $this->getRequest()->getParam(array($_GET['id']));
		$_where = array("id='{$this->_R['id']}'");
		if(!$this->_check->oneCheck($this, $_where)) $this->_check->error();
	    return parent::select(array('id','user','level','pass'),array('where'=>$_where,'limit'=>'1'));
	}
	
    public function findLogin() {
        $this->_tables = array(DB_FREFIX.'manage a',DB_FREFIX.'level b');
        return parent::select(array('a.user','b.level_name'),array('on'=>'a.level=b.id','where'=>array("a.user='{$this->_R['user']}'"),'order'=>'reg_time DESC'));        
    }
	
	public function loginCount() {
		$_where = array("user='{$this->_R['user']}'");
		$_updateData['login_count'] = array('login_count+1');
		$_updateData['last_IP'] = tools::getIP();
		$_updateData['last_login'] = tools::getDate();
		parent::update($_where, $_updateData);
	}
	public function update() {
		$_where = array("id='{$this->_R['id']}'");
		if(!$this->_check->oneCheck($this, $_where)) $this->_check->error();
	    if(!$this->_check->updateCheck($this,$_POST)) $this->check();
	    $_requestData = $this->getRequest()->update($this->_fields);
	    $_requestData['pass'] = md5($_requestData['pass']);
	    return parent::update($_where,$_requestData);	    
	}
	
	public function delete() {
		$_where = array("id='{$this->_R['id']}'");
		return parent::delete($_where);
	}
	
	public function total() {
	    return parent::total();
	}
	
	//处理登录信息
	public function login() {
		$_where = array("user='{$this->_R['user']}'","pass='" .md5($this->_R['pass']). "'");		
		if(!$this->_check->loginCheck($this,$_where)) $this->_check->error();
		return true;
//		return  $this->getRequest()->login($_where);
	}

}

?>