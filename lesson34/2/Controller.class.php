<?php

class Controller {
	private $_context;
	public function __construct() {
		$this->_context = new Context();
	}
	public function getContext() {
		return $this->_context;
	}
	public function process() {
		//获取参数加载对象

		$_cmd = Factory::getCommand($this->_context->getParam('action'));
		if($_cmd->execute($this->_context)) {
			echo $this->_context->getSucc();
	}
		else {
			echo $this->_context->getError();
		}
}
}

?>