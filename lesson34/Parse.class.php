<?php


class Parse {
	private $_vars = array();
	public function assign($_var,$_value) {
		$this->_vars[$_var] = $_value;

	}

	public function __get($_key) {
		return $this->$_key;
	}

	public function display($_str) {
		$_variable = new Variable();
		$_str = $_variable->expression($this,$_str);
		return $_str;
	}
}

?>