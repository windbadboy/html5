<?php

class ProductBuilder {
	private $_product;
	public function __construct() {
		$this->_product = new Product();
	}
	public function build($_info) {
		$this->_product->setType($_info['type']);
		$this->_product->setColor($_info['color']);
		$this->_product->setSize($_info['size']);
		$this->_product->setNum($_info['num']);						
	}
	public function getProduct() {
		return $this->_product;
	}
}

?>