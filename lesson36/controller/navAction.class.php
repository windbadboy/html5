<?php

class navAction extends Action {  
    public function __construct() {       
        parent::__construct();  
    }
    
    public function index() {
        parent::page();
        $this->_tpl->assign('ALLNav',$this->_model->findAll());
        $this->_tpl->display(SMARTY_ADMIN.'nav/show.tpl');
    }
    
    public function add() {
        if(validate::isArray($_POST) && validate::isNull($_POST)) $this->_model->add() ? $this->_redirect->succ('?a=nav','增加导航成功') : $this->_redirect->error('增加导航失败');
        $this->_tpl->display(SMARTY_ADMIN.'nav/add.tpl');
    }
    
    public function update() {
        //修改数据
        if(isset($_POST['send'])) $this->_model->update() ? $this->_redirect->succ(tools::getPrevPage(),'修改数据成功') : $this->_redirect->error('修改数据失败');
        //得到update页面所需ID数据
        if(isset($_GET['id'])) {
            //print_r($this->_model->findOne());
            $this->_tpl->assign('oneNav',$this->_model->findOne());
            $this->_tpl->display(SMARTY_ADMIN.'nav/update.tpl');
        }
    }
    
    public function delete() {
        if(isset($_GET['id']) && !validate::isNullString($_GET['id'])) $this->_model->delete() ? $this->_redirect->succ(tools::getPrevPage(),'删除数据成功') : $this->_redirect->error('删除数据失败');
        
    }
    
    public function sort() {
            if(isset($_POST['send'])) $this->_model->sort() ? $this->_redirect->succ(tools::getPrevPage()) : $this->_redirect->error('排序失败');            
    }
}

?>