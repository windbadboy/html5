<?

class adminAction extends Action {

	public function __construct() {
		parent::__construct();
	}


	public function index() {
		new userModel();
		$this->_tpl->display(SMARTY_ADMIN.'public/admin.tpl');
	}	

	public function main() {
		$this->_tpl->display(SMARTY_ADMIN.'public/main.tpl');
	}
	
	public function login() {
	    $this->_tpl->display(SMARTY_ADMIN.'public/login.tpl');
	}


}

?>