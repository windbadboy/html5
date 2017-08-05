<?php

class LogToTxt {
	private $_errobject;
	public function __construct(ErrorObject $_errobject) {
		$this->_errobject = $_errobject;
	}

	public function write() {
		fwrite(fopen('log.txt', 'w'),$this->_errobject->getError());
	}
}

?>