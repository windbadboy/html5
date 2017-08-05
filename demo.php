<?php

require 'smarty.inc.php';
//error_reporting(E_ALL);
ini_set('log_errors','on');
ini_set('error_log','myerror.log');
/*
$_name = 'Ted';
$_title = 'Smarty模板引擎';
$_array = array('周鸿异','马云','马化腾','李彦宏');
$_array2 = array('qihu'=>'周鸿异','alibaba'=>'马云','tencent'=>'马化腾','baidu'=>'李彦宏');
$_array3 = array(
		array('360安全卫士','360浏览器'),
		array('淘宝','天猫'),
		array('QQ','微信'),
		array('百度搜索','百度外卖')
	);
$_array4 = array(
		'qihu'=>array('360安全卫士','360浏览器'),
		'alibaba'=>array('淘宝','天猫'),
		'tencent'=>array('QQ','微信'),
		'baidu'=>array('百度搜索','百度外卖')
	);

class computer {
	public $_name = 'Ted1';
	function _run() {
		return 'running...';
	}
}

function _fn_info($_arr) {
	return "君の名は{$_arr['name']},age is {$_arr['age']},成绩是{$_arr['score']}";
}

function _fn_textTed($_arr,$_content) {
	$_content = "<span style='color:{$_arr['color']};font-size:{$_arr['fontsize']};'>$_content</span>";
	return $_content;
}


//分配变量
$_smarty->assign('name',$_name);
$_smarty->assign('title',$_title);
$_smarty->assign('array',$_array);
$_smarty->assign('array2',$_array2);
$_smarty->assign('array3',$_array3);
$_smarty->assign('array4',$_array4);
$_smarty->assign('computer',new computer());
$_smarty->assign('x',10);
$_smarty->assign('y',20);
*/
//$_smarty->register_function('info','_fn_info');
//$_smarty->register_block('textTed','_fn_textTed');

//$_name = '一闪一闪亮晶晶，满天都是小星星.';
//$_smarty->assign('name',$_name);

// if(!$_smarty->is_cached('demo.tpl',$_SERVER["REQUEST_URI"])) {
// $_arr = array(1,2,3,4,5,6,7,8,9,0);
// $_smarty->assign('array',$_arr);

// echo 20;	
// }

// function insert_abc() {
// 	return 20;
// }

try {
	$_pdo = new PDO('mysql:host=localhost;dbname=testguest','root','12345678');
	//$_pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMOD_WARNING);
	$_pdo->query('SET NAMES UTF8');
}
catch (PDOException $e)
{
	exit('database connect failed.'.$e.getMessage());
}

$_sql = "insert into tg_user(
					tg_uniqid,
					tg_active,
					tg_username,
					tg_password,
					tg_question,
					tg_answer,
					tg_sex,
					tg_face,
					tg_reg_time,
					tg_last_time,
					tg_last_ip
					)
					values(
					'123',
					'123',
					'Ted',
					'123',
					'123',
					'123',
					'1',
					'123',
					'2017/07/19',
					'2017/07/19',
					'1.2.3.4'
					)

";
// $_affected_rows = $_pdo->exec($_sql);
// if($_affected_rows) {
// 	echo '新增成功。';
// }
// else {
// 	echo '新增失败';
// }


//$_sql = "SELECT tg_username,tg_qq FROM tg_user";
// $_stmt = $_pdo->query($_sql,PDO::FETCH_ASSOC);
// // foreach ($_stmt as $_row) {
// // 	print_r($_row);
// // }
// while(!!$_row = $_stmt->fetch()) {
// print_r($_row);
// }


$_stmt = $_pdo->prepare($_sql);
$_stmt->execute();
echo $_pdo->lastInsertId();

//载入demo.tpl
$_smarty->display('demo.tpl',$_SERVER["REQUEST_URI"]);
?>