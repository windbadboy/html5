<?php

class Context {
	private $_params = array();
	private $_succ;
	private $_error;
	public function addParam($_key,$_value) {
		$this->_params[$_key] = $_value;

	}
	public function getParam($_key) {
		return $this->_params[$_key];
	}

	public function setSucc($_info) {
		$this->_succ = $_info;
	}

	public function setError($_info) {
		$this->_error = $_info;
	}

	public function getSucc() {
		return $this->_succ;
	}
	public function getError() {
		return $this->_error;
	}

}

?>