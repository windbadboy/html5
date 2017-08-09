<?php 

class check extends validate{
	protected $_flag = true; //Is data valid
	protected $_message = array();
	protected $_data = array();

	public function __construct() {
		$this->_data = $_POST;
	}

	public function getMessage() {
		return $this->_message;
	}
}

?>