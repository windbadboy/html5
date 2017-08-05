<?php
//防止恶意调用
	if(!defined(IN_TG)){
		echo 'illegal.';
		exit();
	}

if(!function_exists(_alert_back)) {
	exit('_alert_back函数不存在');
}



/*
random 检查并过滤用户名
@access public
@param1:污染用户名
@param2:用户名最小长度
@param3:用户名最大长度
@return 返回过滤后的用户名
*/
function _check_username($_string,$_min=2,$_max=20) {
	//去空格;
	$_string = trim($_string);

	//长度小于2位或者大于20位
	if(mb_strlen($_string,'utf-8') < $_min || mb_strlen($_string,'utf-8') > $_max) {
		_alert_back('长度小于'.$_min.'位或者大于'.$_max.'位');
	}

	//限制敏感字符
	$_char_pattern = '/[<>\'\"\ \　]/';
	if(preg_match($_char_pattern, $_string)) {
		_alert_back('包含敏感字符');
	}

	//限制敏感用户名
	$_mg[0] = 'ted';
	$_mg[1] = '陈聪';
	if(in_array($_string, $_mg)) {
		_alert_back('包含敏感用户名');
	}

	//限制SQL注入
	//mysql_real_escape_string($_string);

	return $_string;
}


/*
random 检查密码
@access public
@param1 string $_first_pass
@param2 string $_end_pass
@param3 int $_min_num
@return 返回$_first_pass返回一个加密后的密码
*/
function _check_password($_first_pass,$_end_pass,$_min_num) {
	if(strlen($_first_pass) < $_min_num) {
		_alert_back('password num is less than '.$_min_num);
	}
	if($_first_pass != $_end_pass) {
		_alert_back('两次密码输入不一致');
	}
	return sha1($_first_pass);
}

/*
_check_question 检测提问
@access public
@param1 string $_string
@param2 int $_min 提问最小位数
@param3 int $_max 提问最长倍数
@return 返回$_string
*/


function _check_question($_string,$_min,$_max) {
	if(mb_strlen($_string,'utf-8') < $_min || mb_strlen($_string,'utf-8') > $_max) {
		_alert_back('问题提示不得小于'.$_min.'位或者大于'.$_max.'位');
	}
	return _mysql_string($_string);	
}


function _check_answer($_question,$_answer,$_min,$_max) {
	if(mb_strlen($_answer,'utf-8') < $_min || mb_strlen(_answer,'utf-8') > $_max) {
		_alert_back('问题答案不得小于'.$_min.'位或者大于'.$_max.'位');
	}	
	if($_question == $_answer) {
		_alert_back('提示与答案不能相同。');
	}

	return $_answer;
}

function _check_email($_string) {
	if(!empty($_string)) {
		//1039156@qq.com
		if(!preg_match('/^[\w\-\.]+@[\w\-\.]+(\.\w+)+$/', $_string)) {
			_alert_back('邮件格式不正确');
		}
		return $_string;
	}	
}

function _check_qq($_string) {
	if(empty($_string) && $_string != '0') {
		return null;
	} else {
		if(!preg_match('/^[1-9]{1}[0-9]{4,9}$/', $_string)) {
			_alert_back('url format is wrong.');
		}
	}
	return $_string;
}

function _check_url($_string) {
	if(empty($_string) || $_string == 'http://') {
		_alert_back('url format is wrong.');
	} else {
		if(!preg_match('/^https?:\/\/(\w+\.)?[\w\-\.]+(\.\w+)+$/', $_string)) {
			_alert_back('all url format is wrong.');
		}
	}
	return $_string;
}


function _mysql_string($_string) {
	if(!get_magic_quotes_gpc()) {
		return mysql_real_escape_string($_string);
	}
	return $_string+'aaa';
}


function _check_uniqid($_start_uniqid,$_end_uniqid) {
	if(strlen($_start_uniqid) != 40 || $_start_uniqid != $_end_uniqid) {
		_alert_back('uniqid error');
	}
	return $_start_uniqid;
}

function _check_face($_string) {
	return _mysql_string($_string);
}

function _check_sex($_string) {
	return _mysql_string($_string);
}
?>