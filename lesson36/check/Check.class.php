<?php 

class check extends validate{
	protected $_flag = true; //Is data valid
	protected $_message = array();


	public function getMessage() {
		return $this->_message;
	}
	//指定数据合法性检查
	public function oneCheck($_model,$_requestData='') {
	    if(!$_model->isOne(array('id'=>$_requestData['id']))) {
	        $this->_message[] = '未找到指定数据.';
	        $this->_flag = false;
	    }
	    
	    
	    return $this->_flag;
	}
}

?>