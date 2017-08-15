<?

class manageAction extends Action {


	public function __construct() {
		parent::__construct();
	}
	public function index() {
		//显示总记录数
		parent::page();
		$this->_tpl->assign('ALLManage',$this->_model->findAll());
		$this->_tpl->display(SMARTY_ADMIN.'manage/show.tpl');
	}	

	public function add() {
		if(validate::isArray($_POST) && validate::isNull($_POST)) $this->_model->add() ? $this->_redirect->succ('?a=manage','增加数据成功') : $this->_redirect->error('增加数据失败');

		$this->_tpl->display(SMARTY_ADMIN.'manage/add.tpl');
	}
	public function update() {
	    if(isset($_GET['id'])) {
	        
	        $this->_tpl->display(SMARTY_ADMIN.'manage/update.tpl');
	    }

	}
	public function isUser() {
		$this->_model->isUser();
	}	
	public function delete() {
	    if(isset($_GET['id']) && !validate::isNullString($_GET['id'])) $this->_model->delete() ? $this->_redirect->succ(tools::getPrevPage(),'删除数据成功') : $this->_redirect->error('删除数据失败');

	}
}

?>