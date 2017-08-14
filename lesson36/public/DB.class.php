<?php

class DB {
	private $_pdo = null;
	private $_tables = array();
	static private $_instance = null;
	static protected function getInstance($_tables) {
		if(!(self::$_instance instanceof self))
		    {
		    	self::$_instance = new self();
		    	self::$_instance->_tables = $_tables;
		    }
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
		$_addFields = array();
		$_addValues = array();
		$_postData = tools::setFormString($_postData);
		foreach ($_postData as $key => $value) {
			$_addFields[] = $key;
			$_addValues[] = $value;
		}
		$_addFields = implode(',', $_addFields);
		$_addValues = implode("','", $_addValues);
		$_sql = "insert into {$this->_tables[0]}($_addFields) values('$_addValues')";
		return $this->execute($_sql)->rowCount();

	}

	protected function isOne($_isOneData) {
		$_isEnd = '';
		foreach ($_isOneData as $_key => $_value) {
			$_isEnd .= "$_key='$_value' and ";
		}
		$_isEnd = substr($_isEnd, 0,-4);
		$_sql = "select * from {$this->_tables[0]} where $_isEnd limit 1";
		//echo $_sql;
		return $this->execute($_sql)->rowCount();		
	}
	
	protected function select($_fields,$_param = array()) {
		$_selectFields = implode(',', $_fields);		
		$_limit = isset($_param['limit']) ? $_param['limit'] : '';
		$_order = isset($_param['order']) ? $_param['order'] : '';
		$_sql = "select $_selectFields from {$this->_tables[0]} $_order $_limit";
		$_stmt = $this->execute($_sql);
		$_result = array();
		while(!!$_objs = $_stmt->fetchObject()) {
			$_result[] = $_objs;
		}
		return tools::setHtmlString($_result);
	}
	
	protected function delete($_deleteData) {
	    $_isEnd = '';
	    foreach ($_deleteData as $_key => $_value) {
	        $_isEnd .= "$_key='$_value' and ";
	    }
	    $_isEnd = substr($_isEnd, 0,-4);
	    $_sql = "delete from {$this->_tables[0]} where $_isEnd";
	    $_stmt = $this->execute($_sql);
	    return $_stmt->rowCount();
	}
	
	protected function total() {
		$_sql = "select count(*) count from {$this->_tables[0]}";
		$_stmt = $this->execute($_sql);
		return $_stmt->fetchObject()->count;
	}

	private function execute($_sql) {
		$_stmt = $this->_pdo->prepare($_sql);
		$_stmt->execute();
		return $_stmt;		
	}

}



?>