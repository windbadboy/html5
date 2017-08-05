<?php

require 'Observable.class.php';
require 'Observer.class.php';
require 'Login.class.php';
require 'MailWarning.class.php';
require 'Logger.class.php';


$_test = new Login();
$_test->attach(new MailWarning);
$_test->attach(new Logger);
$_test->handleLogin('aaa','123');

?>