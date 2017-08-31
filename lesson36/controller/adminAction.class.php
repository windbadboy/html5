<?

class adminAction extends Action {
    private $_manage = null;
	public function __construct() {
		parent::__construct();
		$this->_manage = new manageModel();
	}


	public function index() {
        if(isset($_SESSION['admin'])) {
            $this->_tpl->assign('admin',$_SESSION['admin']);
            $this->_tpl->display(SMARTY_ADMIN.'public/admin.tpl');
        } else {
            $this->_redirect->succ('?a=admin&m=login');
        }
	}	

	public function main() {
		$this->_tpl->display(SMARTY_ADMIN.'public/main.tpl');
	}
	
	public function login() {
	    if(isset($_POST['send'])) {
	        $_login = $this->_manage->findLogin();
	        $_SESSION['admin']['user'] = $_login[0]->user;
	        $_SESSION['admin']['level'] = $_login[0]->level_name;
	        if($this->_manage->login()) $this->_redirect->succ('?a=admin','登录成功');
	    }
	    $this->_tpl->display(SMARTY_ADMIN.'public/login.tpl');
	}


}

?>