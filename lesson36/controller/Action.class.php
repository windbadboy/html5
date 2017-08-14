<?php

class Action {
	protected  $_tpl;
	protected $_model;
	protected $_redirect = null;

	public function __construct($_model = null) {
		$this->_tpl = TPL::getInstance();
		$this->_model = $_model;
		$this->_redirect = redirect::getInstance($this->_tpl);

	}
	public function run() {
		$_m = isset($_GET['m']) ? $_GET['m'] : 'index';
		method_exists($this, $_m) ? eval('$this->'.$_m.'();') : $this->index();
	}
	
	public function page($_total,$_pagesize = PAGE_SIZE) {
		$_page = new Page($_total, $_pagesize);//执行Page构造函数
		$this->_model->setLimit($_page->getLimit());//得到limit sql语句
		$this->_tpl->assign('page',$_page->showpage());
		$this->_tpl->assign('num',($_page->getPage()-1)*$_pagesize);		
		
	}
	
	public function delete($_id) {
	    //if($this->_model->_request->)
	}
}

?>