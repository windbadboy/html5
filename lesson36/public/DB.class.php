<?php

class DB {
	private $_pdo = null;
	static private $_instance = null;
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

	protected function add($_postData,$_tables) {
		$_addFields = array();
		$_addValues = array();
		foreach ($_postData as $key => $value) {
			$_addFields[] = $key;
			$_addValues[] = $value;
		}
		$_addFields = implode(',', $_addFields);
		$_addValues = implode("','", $_addValues);
		$_sql = "insert into $_tables[0]($_addFields) values('$_addValues')";
		//echo $_sql;
		$_stmt = $this->_pdo->prepare($_sql);
		$_stmt->execute();
		return $_stmt->rowCount();
	}

}



?>