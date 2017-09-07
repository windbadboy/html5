<?php


class navCheck extends Check{
    public function addCheck($_model,array $_param) {
        if(self::isNullString($_POST['name'])) {
            $this->_message[] = '名称不允许为空.';
            $this->_flag = false;
        }
        if(self::checkStrLength($_POST['name'],2,'min')) {
            $this->_message[] = '至少2个字符.';
            $this->_flag = false;
        }
        if(self::checkStrLength($_POST['name'],4,'max')) {
            $this->_message[] = '不能多于4个字符.';
            $this->_flag = false;
        }
        if($_model->isOne($_param)) {
            $this->_message[] = '导航名被占用.';
            $this->_flag = false;
        }
        return $this->_flag;
    }
    //更新数据合法性检查
    public function updateCheck($_model,$_requestData='') {
        if(self::checkStrLength($_requestData['info'],200,'max')) {
            $this->_message[] = '不能多于200个字符.';
            $this->_flag = false;
        }
        return $this->_flag;
    }

}


?>