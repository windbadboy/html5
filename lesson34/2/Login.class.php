<?php

class Login {
	private $_user = 'admin';
	private $_pass = '123';
	public function execute(Context $_context) {
		if($_context->getParam('user') == $this->_user && $_context->getParam('pass') == $this->_pass) {
			return true;
		}
		else {
			return false;
		}
	}
}

?>