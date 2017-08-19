<?php


class navCheck extends Check{
    public function addCheck($_model,$_requestData='') {
        if(self::isNullString($_requestData['name'])) {
            $this->_message[] = '名称不允许为空.';
            $this->_flag = false;
        }
        if(self::checkStrLength($_requestData['name'],2,'min')) {
            $this->_message[] = '至少2个字符.';
            $this->_flag = false;
        }
        if(self::checkStrLength($_requestData['name'],4,'max')) {
            $this->_message[] = '不能多于4个字符.';
            $this->_flag = false;
        }
        return $this->_flag;
    }
}


?>