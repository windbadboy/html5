<?php

class tree {
    
    static private $_instance = null;
    static public function getInstance() {
        if(!(self::$_instance instanceof self))
        {
            self::$_instance = new self();
            
        }
        
        return self::$_instance;
    }
    private function __construct() {}
    private function __clone() {}
    
    public function getTree(array $_allNav) {
        foreach ($_allNav as $_value) {
            $_value->sid == 0 ? $_mainNav[] = $_value : $_childNav[] = $_value;
            if($_value->id == $_GET['id']) {
                $_result[0] = $_value;
                $_result[0]->sait[$_result[0]->id] = $_result[0]->name;
            }
            if($_value->sid == $_GET['id']) {
                $_result[0]->child[] = $_value;
            }
        }
        if($_result[0]->sid != 0) {
            foreach ($_mainNav as $_value) {
                if($_result[0]->sid == $_value->id) {
                    $_child = $_result;
                    $_result[0] = $_value;
                    $_result[0]->sait[$_result[0]->id] = $_result[0]->name;
                    $_result[0]->sait[$_child[0]->id] = $_child[0]->name;;
                }
            }
            foreach ($_childNav as $_value) {
                if($_result[0]->id == $_value->sid) {
                    $_result[0]->child[] = $_value;
                }
            }
        }
        return $_result;
    }
  
}

?>