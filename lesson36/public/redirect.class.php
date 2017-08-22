<?php

class redirect {
	static private $_instance = null;
	static public function getInstance($_tpl) {
		if(!(self::$_instance instanceof self))
		    {
		    	self::$_instance = new self();
		    	self::$_instance->_tpl = $_tpl;

		    }
		return self::$_instance;
	}
	private function __construct() {}
	private function __clone() {}

	public function succ($_url,$_message) {
		$this->_tpl = TPL::getInstance();
		$this->_tpl->assign('message',$_message);
		$this->_tpl->assign('url',$_url);
		$this->_tpl->display(SMARTY_ADMIN.'public/succ.tpl');
		exit();
	}

	public function error($_message) {
		$this->_tpl = TPL::getInstance();
		$this->_tpl->assign('errorinfo',$_message);
		$this->_tpl->assign('prev',tools::getPrevPage());
		$this->_tpl->display(SMARTY_ADMIN.'public/error.tpl');		
		exit();
	}

}

?>