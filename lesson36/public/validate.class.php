<?php

class validate {
	static public function isArray($_array) {
		return is_array($_array) ? true : false;
	}
	static public function isNull($_array) {
		return !count($_array) == 0 ? true : false;
	}

	static public function inArray($_data,$_array) {
		return in_array($_data, $_array) ? true : false;
	}

	static public function isNullString($_string) {
		return empty($_string) ? true : false;
	}

	static public function checkStrLength($_string,$_length,$_flag,$_charset = 'utf-8') {
		if($_flag == 'min') {
			if(mb_strlen(trim($_string,$_charset))<$_length) return true;
			return false;
		}elseif($_flag == 'max') {
			if(mb_strlen(trim($_string,$_charset))>$_length) return true;
			return false;
		}elseif($_flag == 'equals') {
			if(mb_strlen(trim($_string,$_charset))!=$_length) return true;
			return false;			
		}
	}
	static public function checkEquals($_string,$_anotherstring) {
		if(trim($_string) != trim($_anotherstring)) return true;
			return false;
	}
}

?>