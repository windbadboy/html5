<?php

class navModel extends Model{

    public function __construct() {
        parent::__construct();
        $this->_fields = array('id','name','info','sort','sid');
        $this->_tables = array(DB_FREFIX.'nav');
//        $this->_sid = isset($_GET['sid']) ? tools::setHtmlString($_GET['sid']) : 0;
        $this->_check = new navCheck();
        list(
        		$this->_R['sid'],
        		$this->_R['id'],
                $this->_R['name'],
        		$this->_R['getsid']
        		) = $this->getRequest()->getParam(
        		array(
        				isset($_POST['sid']) ? $_POST['sid'] : 0,
        				isset($_GET['id']) ? $_GET['id'] : 0,
        		        isset($_POST['name']) ? $_POST['name'] : 0,
        				isset($_GET['sid']) ? $_GET['sid'] : 0,        				
        		)
        		);
    }
    
    public function add() {
        $_where = array("name='{$this->_R['name']}'");
        //检查重复名
        if(!$this->_check->addCheck($this,$_where)) $this->_check->error();
        //数据筛选
        $_postData = $this->getRequest()->add($this->_fields);
        $_postData['sort'] = $this->nextId();
        //提交父类写入数据库;
        return parent::add($_postData);
    }
    
    //查找所有数据
    public function findAll() {
        $this->_tables = array(DB_FREFIX.'nav a');
        return parent::select(array('id','name','info','sort','sid'),array('where'=>array("sid='{$this->_R['getsid']}'"),'limit'=>$this->_limit,'order'=>'sort ASC'));
    }
    //修改数据
    public function update() {
    	$_where = array("id='{$this->_R['id']}'");
    	if(!$this->_check->oneCheck($this, $_where)) $this->_check->error();
    	if(!$this->_check->updateCheck($this)) $this->_check->error();
        $_requestData = $this->getRequest()->update($this->_fields);
        return parent::update($_where,$_requestData);        
    }
    //查询一条数据，并返回数组
    public function findOne() {
        if(isset($_GET['sid'])) {
            return parent::select(array('id','name','info','sort','sid'),array('where'=>array("id='{$this->_R['getsid']}'"),'limit'=>'1'));
        }
        $_where = array("id='{$this->_R['id']}'");
        if(!$this->_check->oneCheck($this, $_where)) $this->_check->error();
        return parent::select(array('id','name','info','sort','sid'),array('where'=>$_where,'limit'=>'1'));
    }
    
    //获取总记录数
    public function total($_n1='') {
        return parent::total(array('where'=>array("sid='{$this->_R['sid']}'")));
    }
    
    //排序
    public function sort() {
        foreach($_POST['sort'] as $_key => $_value) {
            if(!is_numeric($_value)) continue;
            parent::update(array("id='$_key'"), array('sort'=>$_value));
        }
        return true;
    }
    
    //删除
    public function delete() {
    	$_where = array("id='{$this->_R['id']}'");
    	if(!$this->_check->oneCheck($this,$_where)) $this->_check->error();
    	return parent::delete($_where);
    }

}


?>