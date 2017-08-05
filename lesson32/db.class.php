<?php


class db {
	private $db;
	static private $_instance;
	static public function getInstance() {
		if(!(self::$_instance instanceof self)) {
			self::$_instance = new self();			
		}
		return self::$_instance;
	}	
	//私有化克隆
	private function __clone() {}
	public function db() {
		try {
			$this->db = new PDO('mysql:host=localhost;dbname=testguest','root','12345678');
			echo 'db object created.';
		}
		catch (PDOException $e) {
			exit($e->getMessage());
		}
	}
	public function query($_sql) {
		$this->db->query($_sql);
	}
}

?>