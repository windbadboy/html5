<?php

class Factory {
	static private $_obj = null;
	static public function setAction()
	{
		$_a = self::getA();
		if(!file_exists(ROOT_PATH.'/controller/'.$_a.'Action.class.php')) $_a = 'index';
		eval('self::$_obj = new '.$_a.'Action();');
		return self::$_obj;		
	}
	static public function setModel() {
		$_a = self::getA();
		if(file_exists(ROOT_PATH.'/model/'.$_a.'Model.class.php')) 
		eval('self::$_obj = new '.$_a.'Model();');
		return self::$_obj;		
	}
	static public function setCheck() {
		$_a = self::getA();
		if(file_exists(ROOT_PATH.'/check/'.$_a.'Check.class.php'))
			eval('self::$_obj = new '.$_a.'Check();');
		return self::$_obj;		
	}
	
	static public function getA() {
		if(isset($_GET['a']) && !empty($_GET['a'])) {
			return $_GET['a'];
		}
		return 'index';		
	}
}

?>