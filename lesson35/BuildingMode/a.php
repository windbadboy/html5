<?php

require 'Product.class.php';
require 'ProductBuilder.class.php';

$_productArr = array(
	'color'=>'Red',
	'size'=>'XL',
	'type'=>'Man',
	'num'=>10);

$_productbuilder = new ProductBuilder();
$_productbuilder->build($_productArr);
echo $_productbuilder->getProduct()->getproductinfo();
//echo $_productbuilder->getProduct();
?>