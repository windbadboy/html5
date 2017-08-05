<?php

class lesson {
	private $_num;
	private $_strategy;
	function lesson($_num,$_strategy) {
		$this->_num = $_num;
		$this->_strategy=$_strategy;
	}
//拦截器
	public function __get($_key) {
		return $this->$_key;
	}
	public function cost() {
		return $this->_strategy->cost($this);
	}
	public function type() {
		return $this->_strategy->type();
	}
}

?>