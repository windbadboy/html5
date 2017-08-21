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
    //删除指定数据
    public function delete($_n1='',$_deleteData='') {
        //print_r($this->_fields);
        $_deleteData = $this->getRequest()->delete($this->_fields);
        //print_r($_deleteData);
        return parent::delete($_deleteData);
        
    }
    //获取总记录数
    public function total($_n1='') {
        return parent::total($_n1='');
    }

}


?>