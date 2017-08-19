<?php

class navAction extends Action {  
    public function __construct() {       
        parent::__construct();  
    }
    
    public function index() {
        $this->_tpl->display(SMARTY_ADMIN.'nav/show.tpl');
    }
    
    public function add() {
        if(validate::isArray($_POST) && validate::isNull($_POST)) $this->_model->add() ? $this->_redirect->succ('?a=nav','增加导航成功') : $this->_redirect->error('增加导航失败');
        $this->_tpl->display(SMARTY_ADMIN.'nav/add.tpl');
    }
    
    public function update() {
        $this->_tpl->display(SMARTY_ADMIN.'nav/update.tpl');
    }
    
    public function delete() {
        
    }
}

?>