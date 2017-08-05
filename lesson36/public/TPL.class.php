<?php 

class TPL extends smarty {
	static private $_instance;
	static public function getInstance() {
		if(!(self::$_instance instanceof self))
		    {self::$_instance = new self();}
		return self::$_instance;
	}
	private function __construct() {

		$this->setConfigs();

	}
	private function __clone() {}
	private function setConfigs() {

		$this->template_dir = ROOT_PATH.'/view/';


		$this->compile_dir = ROOT_PATH.'/compile/';


		$this->config_dir = ROOT_PATH.'/config/';


		$this->cache_dir = ROOT_PATH.'/cache/';



		$this->caching = 0;		
	}
}

?>