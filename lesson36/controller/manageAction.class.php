<?

class manageAction extends Action {


	public function __construct() {
		parent::__construct(new manageModel(),new manageCheck());
	}
	public function index() {
		$this->_tpl->display(SMARTY_ADMIN.'manage/manage.tpl');
	}	

	public function add() {
		if(validate::isArray($_POST) && validate::isNull($_POST)) {
			echo $this->_model->add(request::getInstance($this->_check));		
		}
		$this->_tpl->display(SMARTY_ADMIN.'manage/add.tpl');
	}
	public function update() {
		$this->_tpl->display(SMARTY_ADMIN.'manage/update.tpl');
	}

}

?>