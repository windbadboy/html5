<?php

class indexAction extends Action{
    private $_nav = null;
    
    public function __construct() {
        parent::__construct();
        $this->_nav = new navModel();
        
    }

	public function index() {
//	    print_r($this->_nav->findFrontTenNav());
		$this->_tpl->assign('FrontTenNav',$this->_nav->findFrontTenNav());
		$this->_tpl->display(SMARTY_FRONT.'public/index.tpl');
	}
	
	public function validateCode() {
	    $_vc = new ValidateCode();
	    $_vc->doimg();
	    $_SESSION['code'] = $_vc->getCode();
	}
}

?>