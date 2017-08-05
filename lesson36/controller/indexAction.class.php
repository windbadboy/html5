<?php

class indexAction extends Action{

	public function index() {
		$this->_tpl->assign('name','Ted');
		$this->_tpl->display(SMARTY_STYLE.'index.tpl');
	}
}

?>