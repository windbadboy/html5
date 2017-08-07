<?php

class DB {
	private $_pdo;
	static private $_instance;
	static protected function getInstance() {
		if(!(self::$_instance instanceof self))
		    {self::$_instance = new self();}
		return self::$_instance;
	}
	private function __construct() {

		try {
			$_drive_opt = array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES '.DB_CHARSET);
			$this->_pdo = new PDO(DB_DNS,DB_USER,DB_PASS,$_drive_opt);
			$this->_pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);			
		} catch (PDOException $e) {
			exit($e->getMessage());
		}

		

	}
	private function __clone() {}

	protected function add($_postData) {
		print_r($_postData);
		$_sql = "insert into mall_manage(user,pass) values('admin','123')";
		$_stmt = $this->_pdo->prepare($_sql);
		$_stmt->execute();
	}

}



?>