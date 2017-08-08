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
}

?>