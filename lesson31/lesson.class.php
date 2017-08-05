<?php

abstract class lesson {
	protected $_num;
	protected $_strategy;
	function lesson($_num,$_strategy) {
		$this->_num = $_num;
		$this->_strategy=$_strategy;
	}
//拦截器
	public function __get($_key) {
		return $this->$_key;
	}
	abstract function cost();
	abstract function type();
}

?>