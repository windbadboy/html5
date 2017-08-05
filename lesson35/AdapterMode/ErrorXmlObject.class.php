<?php

class ErrorXmlObject extends ErrorObject {
	private $_line;
	private $_text;
	public function __construct($_errinfo) {
		parent::__construct($_errinfo);
		$_temp = explode(':', $this->getError());
		$this->_line = $_temp[0];
		$this->_text = $_temp[1];
	}

	public function getLine() {
		return $this->_line;
	}

	public function getText() {
		return $this->_text;
	}
}

?>