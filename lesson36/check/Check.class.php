<?php 

class check extends validate{
	protected $_flag = true; //Is data valid
	protected $_message = array();


	public function getMessage() {
		return $this->_message;
	}
	//指定数据合法性检查
	public function oneCheck(Model $_model,array $_param) {
	    if(!$_model->isOne($_param)) {
	        $this->_message[] = '未找到指定数据.';
	        $this->_flag = false;
	    }
	    
	    
	    return $this->_flag;
	}
}

?>