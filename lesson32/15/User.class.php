<?php

class User {
	private $_obj;
	public function user() {
		$this->_obj = factory::getUser();		
	}
	public function selectUser() {
		return $this->_obj->selectUser();
	}
	public function updateUser() {
		return $this->_obj->updateUser();		
	}
	public function deleteUser() {
		return $this->_obj->deleteUser();
	}
	public function addUser() {
		return $this->_obj->addUser();
	}

}

?>