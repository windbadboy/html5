<?php 

class check extends validate{
	protected $_flag = true; //Is data valid
	protected $_message = array();
    protected $_tpl = null;
    
    public function __construct() {
        $this->_tpl = TPL::getInstance();
    }


	//指定数据合法性检查
	public function oneCheck(Model $_model,array $_param) {
	    if(!$_model->isOne($_param)) {
	        $this->_message[] = '未找到指定数据.';
	        $this->_flag = false;
	    }

	    //检验数据全法性

	    
	    return $this->_flag;
	}
	public function error($_url = '') {
	    if(empty($_url)) {
	        $this->_tpl->assign('errorinfo',$this->_message);
	        $this->_tpl->assign('prev',tools::getPrevPage());
	        $this->_tpl->display(SMARTY_ADMIN.'public/error.tpl');
	        exit();
	    } else {
	        redirect::getInstance()->succ($_url);
	    }

	}
	
	
}

?>