<?php

class ArrayI {
	private $_array;
	public function __construct($_array) {
		$this->_array = $_array;
	}

	public function getArray() {
		return $this->_array; 
	}
}

?>