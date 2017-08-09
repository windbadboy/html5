<?php

class ManageCheck extends Check {
	public function check() {
		if(self::isNullString($this->_data)) {
			$this->_messag[] = array('error 00:empty username.');
			$this->_flag = false;
		}
		return $this->_flag;

	}
}

?>