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
        //提交父类写入数据库;
        return parent::add($_postData);
    }
}


?>