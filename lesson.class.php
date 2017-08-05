<?php

abstract class lesson {
	protected $_num;
	function lesson($_num) {
		$this->_num = $_num;
	}
	abstract public function cost();
	abstract public function type();
}

?>