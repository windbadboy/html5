<?php

class ManageCheck extends Check {
	//增加数据合法性检查
	public function addCheck($_model,array $_param) {
	    if(self::isNullString($_POST['user'])) {
			$this->_message[] = 'empty username.';
			$this->_flag = false;
		}
		if(self::checkStrLength($_POST['user'],2,'min')) {
			$this->_message[] = 'username need at least 2 letters.';
			$this->_flag = false;
		}
		if(self::checkStrLength($_POST['user'],20,'max')) {
			$this->_message[] = 'username can not have more than 20 letters.';
			$this->_flag = false;
		}
		if(self::checkEquals($_POST['pass'],$_POST['repass'])) {
			$this->_message[] = 'Password inconsistency.';
			$this->_flag = false;
		}
		if(self::isNullString($_POST['level'])) {
			$this->_message[] = 'user level must have a choice.';
			$this->_flag = false;
		}
		if($_model->isOne($_param)) {
			$this->_message[] = 'username already exists.';
			$this->_flag = false;			
		}
		

		return $this->_flag;

	}
	//更新数据合法性检查
	public function updateCheck($_model,$_requestData='') {
		if(self::checkEquals($_requestData['pass'],$_requestData['repass'])) {
			$this->_message[] = 'Password inconsistency.';
			$this->_flag = false;
		}
		if(self::isNullString($_requestData['level'])) {
			$this->_message[] = 'user level must have a choice.';
			$this->_flag = false;
		}		
		return $this->_flag;
	}
	
    //登录信息检查
    public function loginCheck(Model $_model,Array $_param) {
        if(self::isNullString($_POST['user'])) {
            $this->_message[] = '用户名不得为空.';
            $this->_flag = false;
        }
        if(self::isNullString($_POST['pass'])) {
            $this->_message[] = '密码不得为空.';
            $this->_flag = false;
        }
        if(self::isNullString($_POST['code'])) {
            $this->_message[] = '验证码不得为空.';
            $this->_flag = false;
        }
        if(self::checkEquals(strtoupper($_SESSION['code']), strtoupper($_POST['code']))) {
            $this->_message[] = '验证码不正确.';
            $this->_flag = false;
        }
        if(!$_model->isOne($_param)) {
            $this->_message[] = '用户名或密码不正确.';
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