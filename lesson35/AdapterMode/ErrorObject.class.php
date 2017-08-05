<?php

class ErrorObject {
	private $_errinfo;

	public function __construct($_errinfo) {
		$this->_errinfo = $_errinfo;

	}

	public function getError() {
		return $this->_errinfo;
	}

	// public function getLine() {
	// 	return $this->_line;
	// }

	// public function getText() {
	// 	return $this->_text;
	// }
}

?>