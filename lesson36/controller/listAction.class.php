<?php

class listAction extends Action{

	public function index() {
		$this->_tpl->assign('name','列表页');
		$this->_tpl->display(SMARTY_STYLE.'list.tpl');
	}

	public function update() {
		echo 'update.';
	}
}

?>