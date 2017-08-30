<?php

class indexAction extends Action{

	public function index() {
		new userModel();
		$this->_tpl->assign('name','First Page');
		$this->_tpl->display(SMARTY_FRONT.'public/index.tpl');
	}
	
	public function validateCode() {
	    $_vc = new ValidateCode();
	    $_vc->doimg();
	    $_SESSION['code'] = $_vc->getCode();
	}
}

?>