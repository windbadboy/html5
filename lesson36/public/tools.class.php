<?php

class tools {
	static public function getIP() {
		return $_SERVER['REMOTE_ADDR'];
	}

	static public function getDate() {
		date_default_timezone_set('Asia/Shanghai');
		return date('Y-m-d H:i:s');
	}
}

?>