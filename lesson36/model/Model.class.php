<?php

class Model extends DB{
	protected $_DB;
	protected function __construct() {
		$this->_DB = parent::getInstance();
	}
}

?>