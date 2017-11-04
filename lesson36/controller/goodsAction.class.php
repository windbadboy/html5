<?php

class goodsAction extends Action{
    private $_nav = null;
    
    public function __construct() {
        parent::__construct();
        $this->_nav = new navModel();
        
    }
	public function index() {
	    $this->_tpl->display(SMARTY_ADMIN.'goods/show.tpl');
	}
	
	public function add() {
	    $this->_tpl->assign('goodsInfo',$this->_nav->findAddGoodsNav());
	    $this->_tpl->display(SMARTY_ADMIN.'goods/add.tpl');
	}
	
	public function update() {
	        $this->_tpl->display(SMARTY_ADMIN.'goods/update.tpl');
	    }
	public function delete() {
	    
	}
}

?>