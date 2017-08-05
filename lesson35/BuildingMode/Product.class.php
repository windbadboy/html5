<?php

class Product {
	private $_type;
	private $_size;
	private $_color;
	private $_num;
	public function setType($_type) {
		$this->_type = $_type;
	}

	public function setSize($_size) {
		$this->_size = $_size;
	}

	public function setColor($_color) {
		$this->_color = $_color;
	}

	public function setNum($_num) {
		$this->_num = $_num;
	}
	public function getproductinfo() {
		return $this->_type.$this->_size.$this->_color.$this->_num;
	}
}

?>