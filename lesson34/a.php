<?php

require 'Compile.class.php';
require 'Variable.class.php';
require 'Parse.class.php';

$_p = new Parse();
$_p->assign('age',94);

$_str = 'my age is {$age} years old.';

echo $_p->display($_str);

?>