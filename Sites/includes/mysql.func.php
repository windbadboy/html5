<?php
//防止恶意调用
	if(!defined(IN_TG)){
		echo 'illegal.';
		exit();
	}

// define('START_TIME',_runtime());
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PWD', '12345678');
define('DB_NAME', 'testguest');

//创建数据库连接
function _connect() {
	global $_conn;
	if(!($_conn = @mysql_connect(DB_HOST,DB_USER,DB_PWD))) {
		exit('db connect error.');	
	}
}


//选择数据库
function _select_db() {
	if(!mysql_select_db(DB_NAME)) {
		exit('cannot find the db.');
	}
}

//选择字符集
function _set_names() {
	if(!mysql_query('SET NAMES UTF8')) {
		exit('charset error.');
	}
}

//执行查询，返回句柄
function _query($_sql) {
	$_result = "";
	if(!$_result = mysql_query($_sql)) {
		exit('sql execute failed.');
	}
	return $_result;
}

function _fetch_array($_sql) {
	return mysql_fetch_array(_query($_sql),MYSQL_ASSOC);

}

function _is_repeat($_sql,$_info) {
	if(_fetch_array($_sql)) {
		exit($_info);
	}
}

function _close() {
	if(!mysql_close()) {
		exit('db close error.');
	}
}
?>