<?php

class navModel extends Model{
    public function __construct() {
        parent::__construct();
        $this->_fields = array('id','name','info','sort','sid');
        $this->_tables = array(DB_FREFIX.'nav');
        
    }
    
    public function add($_n1='',$_postData='') {
        //数据筛选
        $_postData = $this->getRequest()->add($this->_fields);
        $_postData['sort'] = $this->nextId();
        //提交父类写入数据库;
        return parent::add($_postData);
    }
    
    //查找所有数据
    public function findAll() {
        $this->_tables = array(DB_FREFIX.'nav a');
        return parent::select(array('id','name','info','sort','sid'),array('limit'=>$this->_limit,'order'=>'sort DESC'));
    }
    //修改数据
    public function update($_n3='',$_n1='',$_n2='') {
        $_oneData = $this->getRequest()->one($this->_fields);
        $_requestData = $this->getRequest()->update($this->_fields);
        return parent::update($_oneData,$_requestData);        
    }
    
    public function findOne() {
        $_oneData = $this->getRequest()->one($this->_fields);
        return parent::select(array('id','name','info','sort','sid'),array('where'=>$_oneData,'limit'=>'1'));
    }
    
    //获取总记录数
    public function total($_n1='') {
        return parent::total($_n1='');
    }

}


?>