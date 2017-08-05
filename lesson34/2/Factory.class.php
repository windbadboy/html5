<?php

class Factory {

	static public function getCommand($_action) {
		$_classname = $_action;
		$_classfile = $_classname.'.class.php';
		require $_classfile;
		return new $_classname();
	}
}

?>