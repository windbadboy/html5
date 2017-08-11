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
	static public function getPrevPage() {
		return $_SERVER['HTTP_REFERER'];
	}
}

?>