<?php
class myValidateCode {
    private $_charset = 'abcdefghkmnopqrstuvwxyzABCDEFGHKMNPQRSTUVWXYZ2345689';
    private $_code = '';		//验证码
    private $_codelen = 4;		//验证码长度
    private $_img;				//画板句柄
    private $_width = 130;		//画布宽度
    private $_height = 50;		//画布高度
    private $_fontsize = 14;	//字体大小
    private $_fontcolor;
    private $_font;
    
    public function __construct() {
    	$this->_font = "./font/elephant.ttf";
    }
    //生成随机验证码
    private function createCode() {
        $_len = strlen($this->_charset)-1;
        for ($_i=0;$_i<$this->_codelen;$_i++) {
            $this->_code .=  $this->_charset[mt_rand(0,$_len)];
        }
        return $this->_code;
    }
    
    //生成背景
    private function createBG() {
    	//生成画板
    	$this->_img = imagecreatetruecolor($this->_width, $this->_height);
    	//生成颜色
    	$_color = imagecolorallocate($this->_img, mt_rand(157, 255), mt_rand(157, 255), mt_rand(157, 255));
    	//生成矩形
    	imagefilledrectangle($this->_img, 0, 0, $this->_width, $this->_height, $_color);
    	
    }
    
    //生成文字
    private function createFont() {
    	$this->_fontcolor = imagecolorallocate($this->_img, mt_rand(0, 156), mt_rand(0, 156), mt_rand(0, 156));
		$_x = $this->_width / 4;
		for($i=0;$i<$this->_codelen;$i++) {
			imagettftext($this->_img, $this->_fontsize,mt_rand(-30, 30), 10 + $_x * $i, $this->_height/1.4, $this->_fontcolor, $this->_font, $this->_code[$i]);			
		}

    }
    
    private function Output() {
    	header('Content-type:image/png');
    	imagepng($this->_img);
    	imagedestroy($this->_img);
    }
    
    public function doimg() {
    	$this->createBG();
    	$this->createCode();
    	$this->createFont();
    	$this->Output();
    }
    
}



?>