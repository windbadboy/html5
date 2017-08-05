<?

class adminAction extends Action {
	public function index() {
		new userModel();
		$this->_tpl->assign('name','Ted');
		$this->_tpl->display(SMARTY_STYLE.'admin.tpl');
	}	
}

?>