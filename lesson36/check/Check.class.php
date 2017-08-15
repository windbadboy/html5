<?php 

class check extends validate{
	protected $_flag = true; //Is data valid
	protected $_message = array();


	public function getMessage() {
		return $this->_message;
	}
}

?>