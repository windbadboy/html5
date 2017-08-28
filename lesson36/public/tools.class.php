<?php

class tools {
	static public function getIP() {
		return $_SERVER['REMOTE_ADDR'];
	}

	static public function getDate() {

		return date('Y-m-d H:i:s');
	}

	static public function setFormString($_string) {
		if(!get_magic_quotes_gpc()) {
			if(validate::isArray($_string)) {
				foreach ($_string as $key => $value) {
					$_string[$key] = self::setFormString($value);//if don't support,use addslashes()
				}
			} else {
				return addslashes($_string);
			}			
		}

		return $_string;
	}
	
	static public function setFormItem($_array,$_key,$_value) {
	    $_realArray=array();
	    if(validate::isArray($_array)) {
	        foreach ($_array as $_obj) {
	            $_realArray[$_obj->$_key] = $_obj->$_value;
	        }
	        return $_realArray;
	    }
	}
	
	static public function getPrevPage() {
	    return empty($_SERVER['HTTP_REFERER']) ? '###' : $_SERVER['HTTP_REFERER'];
	}
	//html过滤
	static public function setHtmlString($_data) {
	    $_string = '';
	    if (is_array($_data)) {
	    	if(!validate::isNull($_data)) return $_data;
	        foreach ($_data as $_key=>$_value) {
	            $_string[$_key] = self::setHtmlString($_value);  //递归
	        }
	    } elseif (is_object($_data)) {
	        foreach ($_data as $_key=>$_value) {
	            @$_string->$_key = self::setHtmlString($_value);  //递归
	        }
	    } else {
	        $_string = htmlspecialchars($_data);
	    }
	    return $_string;
	}
}

?>