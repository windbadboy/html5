<?php

require 'AUser.class.php';	//抽象类，面向接口
require 'UserAction.class.php';	//业务类，具体实现
require 'factory.class.php';	//实例化业务类，获取业务对象
require 'User.class.php';		//面向用户。实体类，用于给客户端直接调用。

$_user = new User();
//var_dump($_user);
$_user = new User();
echo $_user->updateUser();

?>