<?php

class computer extends lesson {
	protected $_discount = 0.65;
	protected $_type = '计算机';
		public function cost() {
		return $this->_strategy->cost($this);
	}
	public function type() {
		return $this->_strategy->type($this);
	}
}

?>