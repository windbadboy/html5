<?php

class art extends lesson {
	protected $_discount = 0.75;
	protected $_type = '文科';
		public function cost() {
		return $this->_strategy->cost($this);
	}
	public function type() {
		return $this->_strategy->type($this);
	}
}

?>