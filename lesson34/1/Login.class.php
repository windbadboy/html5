<?php

class Login extends Observable{
	private $_user = 'aaa';
	private $_pass = '123';
	private $_info;
	private $_ret;
	private $_observers = array();

	public function attach(Observer $_observer) {
		$this->_observers[] = $_observer;

	}

	public function detach(Observer $_observer) {

	}

	public function notify() {
		foreach ($this->_observers as $_observer) {
			$_observer->update($this);
		}
	}

	public function handleLogin($_user,$_pass) {
		$this->_info = array($_user,$_pass);
		switch($this->check($this->_info)) {
			case 1:
				$this->_ret = true;
				break;
			case 2:
				$this->_ret = false;
				break;
		}
		$this->notify();
		return $this->_ret;

	}
	private function check($_info) {
			if($_info[0] == $this->_user && $_info[1] == $this->_pass) {
			return 1;
		}
		else {
			return 2;
		}	
	}
	public function getinfo() {
		return $this->_info;
	}

	public function getret() {
		return $this->_ret;
	}

}

?>