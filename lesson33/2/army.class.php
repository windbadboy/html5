<?php

class army extends kind{
	protected $_kind = array();


	public function strength() {
		$_count = 0;
		foreach ($this->_kind as $_value) {
			$_count += $_value->strength();
		}
		return $_count;
	}

}

?>