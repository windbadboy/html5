<?

class manageAction extends Action {


	public function __construct() {
		parent::__construct(Factory::setModel());
	}
	public function index() {
		$this->_tpl->display(SMARTY_ADMIN.'manage/manage.tpl');
	}	

	public function add() {
		if(validate::isArray($_POST) && validate::isNull($_POST)) $this->_model->add() ? $this->_redirect->succ('?a=manage','增加数据成功') : $this->_redirect->error('增加数据失败');

		$this->_tpl->display(SMARTY_ADMIN.'manage/add.tpl');
	}
	public function update() {
		$this->_tpl->display(SMARTY_ADMIN.'manage/update.tpl');
	}
	public function isUser() {
		$this->_model->isUser();
	}	
}

?>