<?php

class detailAction extends Action{

	public function index() {
		$this->_tpl->assign('name','详情页');
		$this->_tpl->display(SMARTY_STYLE.'detail.tpl');
	}
}

?>