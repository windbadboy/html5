<?php

class ManageCheck extends Check {
	public function addCheck($_model,$_requestData='') {
	    if(self::isNullString($_requestData['user'])) {
			$this->_message[] = 'empty username.';
			$this->_flag = false;
		}
		if(self::checkStrLength($_requestData['user'],2,'min')) {
			$this->_message[] = 'username need at least 2 letters.';
			$this->_flag = false;
		}
		if(self::checkStrLength($_requestData['user'],20,'max')) {
			$this->_message[] = 'username can not have more than 20 letters.';
			$this->_flag = false;
		}
		if(self::checkEquals($_requestData['pass'],$_requestData['repass'])) {
			$this->_message[] = 'Password inconsistency.';
			$this->_flag = false;
		}
		if(self::isNullString($_requestData['level'])) {
			$this->_message[] = 'user level must have a choice.';
			$this->_flag = false;
		}
		if($_model->isOne(array('user'=>$_requestData['user']))) {
			$this->_message[] = 'username already exists.';
			$this->_flag = false;			
		}
		

		return $this->_flag;

	}
	
	public function deleteCheck($_model,$_requestData='') {
	    if(!$_model->isOne(array('id'=>$_requestData['id']))) {
	        $this->_message[] = '未找到该用户id，删除失败.';
	        $this->_flag = false;
	    }
	    
	    
	    return $this->_flag;
	}
	
	public function oneCheck($_model,$_requestData='') {
	    if(!$_model->isOne(array('id'=>$_requestData['id']))) {
	        $this->_message[] = '未找到该用户id，处理失败.';
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