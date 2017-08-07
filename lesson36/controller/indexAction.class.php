<?php

class indexAction extends Action{

	public function index() {
		new userModel();
		$this->_tpl->assign('name','First Page');
		$this->_tpl->display(SMARTY_FRONT.'public/index.tpl');
	}
}

?>