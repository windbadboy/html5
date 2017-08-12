<?php

class ManageCheck extends Check {
	public function check($_model) {
		if(self::isNullString($this->_data['user'])) {
			$this->_message[] = 'empty username.';
			$this->_flag = false;
		}
		if(self::checkStrLength($this->_data['user'],2,'min')) {
			$this->_message[] = 'username need at least 2 letters.';
			$this->_flag = false;
		}
		if(self::checkStrLength($this->_data['user'],20,'max')) {
			$this->_message[] = 'username can not have more than 20 letters.';
			$this->_flag = false;
		}
		if(self::checkEquals($this->_data['pass'],$this->_data['repass'])) {
			$this->_message[] = 'Password inconsistency.';
			$this->_flag = false;
		}
		if(self::isNullString($this->_data['level'])) {
			$this->_message[] = 'user level must have a choice.';
			$this->_flag = false;
		}
		if($_model->isOne(array('user'=>$this->_data['user']))) {
			$this->_message[] = 'username already exists.';
			$this->_flag = false;			
		}
		

		return $this->_flag;

	}
	public function ajax($_model) {
		if($_model->isOne(array('user'=>$_POST['user']))) {
			echo 1;		
		} else {
			echo 2;
		}		
	}
}


?>