<?php

class DB {
	private $_pdo = null;

	static private $_instance = null;
	static protected function getInstance() {
		if(!(self::$_instance instanceof self))
		    {
		    	self::$_instance = new self();

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

	protected function add($_tables,$_postData) {
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
		return $this->execute($_sql)->rowCount();

	}
	
	protected function update($_tables,$_oneData,$_postData) {
		$_isEnd = '';
		foreach ($_oneData as $_key => $_value) {
			$_isEnd .= "$_key='$_value' and ";
		}
		$_isEnd = substr($_isEnd, 0,-4);

		$_setData = '';
		foreach ($_postData as $_key => $_value) {
			$_setData .= "$_key='$_value',";
		}
		$_setData = substr($_setData, 0,-1);
		
		$_sql = "UPDATE $_tables[0] set $_setData WHERE $_isEnd LIMIT 1";
//		echo $_sql;

		return $this->execute($_sql)->rowCount();
	}

	protected function isOne($_tables,$_isOneData) {
		$_isEnd = '';
		foreach ($_isOneData as $_key => $_value) {
			$_isEnd .= "$_key='$_value' and ";
		}
		$_isEnd = substr($_isEnd, 0,-4);
		$_sql = "select * from $_tables[0] where $_isEnd limit 1";
		//echo $_sql;
		return $this->execute($_sql)->rowCount();		
	}
	//查询
	protected function select($_tables,$_fields,$_param = array()) {
	    $_tablec = isset($_tables[1]) ? $_tables[0].' INNER JOIN '.$_tables[1] : $_tables[0];
	    $_on = isset($_param['on']) ? 'ON '.$_param['on'] : '';
	    $_selectFields = implode(',', $_fields);		
		$_limit = isset($_param['limit']) ? 'LIMIT '.$_param['limit'] : '';
		$_order = isset($_param['order']) ? 'ORDER BY '.$_param['order'] : '';
		$_isEnd = '';
		if(isset($_param['where'])) {
		    foreach ($_param['where'] as $_key=>$_value) {
		        $_isEnd .= "$_key='$_value' and ";
		    }
		    $_isEnd = 'WHERE '.substr($_isEnd, 0,-4);
		}
		$_sql = "select $_selectFields from $_tablec $_on $_isEnd $_order $_limit";
 		echo $_sql;
		$_stmt = $this->execute($_sql);
		$_result = array();
		while(!!$_objs = $_stmt->fetchObject()) {
			$_result[] = $_objs;
		}
//		print_r($_result);
		return tools::setHtmlString($_result);
	}
	
	//查询下一个id(auto_increment)
	protected function nextId($_tables) {
		$_sql = "SHOW TABLE STATUS like '$_tables[0]'";
		$_stmt = $this->execute($_sql);
		return $_stmt->fetchObject()->Auto_increment;
	}
	
	
	protected function delete($_tables,$_deleteData='') {
	    $_isEnd = '';
	    foreach ($_deleteData as $_key => $_value) {
	        $_isEnd .= "$_key='$_value' and ";
	    }
	    $_isEnd = substr($_isEnd, 0,-4);
	    $_sql = "delete from $_tables[0] where $_isEnd";
	    $_stmt = $this->execute($_sql);
	    return $_stmt->rowCount();
	}
	
	protected function total($_tables,$_param = array()) {
	    $_isEnd = '';
	    if(isset($_param['where'])) {
	        foreach ($_param['where'] as $_key=>$_value) {
	            $_isEnd .= "$_key='$_value' and ";
	        }
	        $_isEnd = 'WHERE '.substr($_isEnd, 0,-4);
	    }
	    
	    $_sql = "select count(*) count from $_tables[0] $_isEnd";
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