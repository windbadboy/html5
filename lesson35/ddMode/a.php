<?php
require 'ArrayI.class.php';

$_myArr = array('a','b','c','d','e');

$_array = new ArrayI($_myArr);
print_r($_array->getArray());

?>