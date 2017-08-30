<?php
class myValidateCode {
    private $_charset = 'abcdefghkmnopqrstuvwxyzABCDEFGHKMNPQRSTUVWXYZ2345689';
    private $_code='';
    //创建随机验证码
    public function createCode() {
        $_len = strlen($this->_charset)-1;
        for ($_i=0;$_i<4;$_i++) {
            $this->_code .=  $this->_charset[mt_rand(0,$_len)];
        }
        return $this->_code;
    }
}



?>