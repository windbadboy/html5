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

		$this->template_dir = SMARTY_TEMPLATE_DIR;


		$this->compile_dir = SMARTY_COMPILE_DIR;


		$this->config_dir = SMARTY_CONFIG_DIR;


		$this->cache_dir = SMARTY_CACHE_DIR;



		$this->caching = SMARTY_CACHING;		
		$this->cache_lifetime = SMARTY_CACHE_LIFETIME;
		$this->left_delimiter = SMARTY_LEFT_DELIMITER;
		$this->right_delimiter = SMARTY_RIGHT_DELIMITER;
	}
}

?>