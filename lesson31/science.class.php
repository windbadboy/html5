<?php

class science extends lesson {
	protected $_discount = 0.85;
	protected $_type = '理科';
		public function cost() {
		return $this->_strategy->cost($this);
	}
	public function type() {
		return $this->_strategy->type($this);
	}
}

?>