<?php

/*
_runtime()获取当前时间（UNIX时间）
*/
function _runtime() {
	$_mtime = explode(' ', microtime());
	return $_mtime[1] + $_mtime[0];
}


function _alert_back($_info) {
	echo "<script type='text/javascript'>alert('".$_info."');history.back();</script>";
}

/*
random verify code
@access public
@param1:the rectangle's width
@param2:the rectangle's height
@param3:the num of verify code
@param4:whethere display rectangle
@return void
*/

function _code($_width=75,$_height=25,$_rnd_num = 4,$_flag=false) {


for($i=0;$i<$_rnd_num;$i++) {
	$_nmsg .= dechex(mt_rand(0,15));
}
$_SESSION['code'] = $_nmsg;




$_img = imagecreatetruecolor($_width, $_height);
$white = imagecolorallocate($_img, 255, 255, 255);
imagefill($_img, 0, 0, $white);

//rectrangle
if($_flag) {
$black = imagecolorallocate($_img, 0, 0, 0);
imagerectangle($_img, 0, 0, $_width-1, $_height-1, $black);
}
for($i=0;$i<6;$i++) {
	$_rnd_color = imagecolorallocate($_img, mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
	imageline($_img, mt_rand(0,$_width), mt_rand(0,$_height), mt_rand(0,$_width), mt_rand(0,$_height), $_rnd_color);
}

//randow snowflower
for($i=0;$i<100;$i++) {
	$_rnd_color = imagecolorallocate($_img, mt_rand(200,255),mt_rand(200,255),mt_rand(200,255));
	imagestring($_img, 5, mt_rand(0,$_width), mt_rand(0,$_height), '*', $_rnd_color);	
}
for($i=0;$i<strlen($_SESSION['code']);$i++) {
	$_rnd_color = imagecolorallocate($_img, mt_rand(0,100),mt_rand(0,150),mt_rand(0,150));
	imagestring($_img,mt_rand(3,5),$i*$_width/$_rnd_num+mt_rand(1,10), mt_rand(1,$_height/2), $_SESSION['code'][$i], $_rnd_color);	
	
}
header('Content-Type:image/png');
imagepng($_img);


imagedestroy($_img);
}
?>