<?php


class listAction extends Action{
    private $_nav = null;
    
    public function __construct() {
        parent::__construct();
        $this->_nav = new navModel();
        
    }
    
    public function index() {
        $this->_tpl->assign('FrontNav',$this->_nav->findFrontNav());
        $this->_tpl->assign('FrontTenNav',$this->_nav->findFrontTenNav());
        $this->_tpl->display(SMARTY_FRONT.'public/list.tpl');
    }
}
?>