<?php
//define smarty environment set.
define('SMARTY_FRONT','default/');
define('SMARTY_ADMIN','admin/');
define('SMARTY_TEMPLATE_DIR',ROOT_PATH.'/view/');
define('SMARTY_COMPILE_DIR',ROOT_PATH.'/compile/');
define('SMARTY_CONFIG_DIR',ROOT_PATH.'/config/');
define('SMARTY_CACHE_DIR',ROOT_PATH.'/cache/');
define('SMARTY_CACHE_LIFETIME',60*60*24);
define('SMARTY_CACHING',0);
define('SMARTY_LEFT_DELIMITER','{');
define('SMARTY_RIGHT_DELIMITER','}');


//define database params.
define('DB_DNS','mysql:host=127.0.0.1;dbname=mall');
define('DB_USER','root');
define('DB_PASS','12345678');
define('DB_CHARSET','UTF8');
define('DB_FREFIX','mall_');
define('PAGE_SIZE', 1);
?>