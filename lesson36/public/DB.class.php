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
		$_postData = tools::setFormString($_postData);
		foreach ($_postData as $key => $value) {
			$_addFields[] = $key;
			$_addValues[] = $value;
		}
		$_addFields = implode(',', $_addFields);
		$_addValues = implode("','", $_addValues);
		$_sql = "insert into $_tables[0]($_addFields) values('$_addValues')";
		return $this->execute($_sql);

	}

	protected function isOne($_where,$_tables) {
		$_isEnd = '';
		foreach ($_where as $_key => $_value) {
			$_isEnd .= "$_key='$_value' and ";
		}
		$_isEnd = substr($_isEnd, 0,-4);
		$_sql = "select * from $_tables[0] where $_isEnd limit 1";
		echo $_sql;
		return $this->execute($_sql);		
	}

	private function execute($_sql) {
		$_stmt = $this->_pdo->prepare($_sql);
		$_stmt->execute();
		return $_stmt->rowCount();		
	}

}



?>