<?php

require 'kind.class.php';
require 'swordsman.class.php';
require 'gunner.class.php';
require 'army.class.php';
require 'warship.class.php';


$_xxx = new army();
$_xxx->addkind(new swordsman());
$_xxx->addkind(new gunner());
echo $_xxx->strength();

echo '<br />';

$_warship1 = new warship();
$_warship1->addkind(new gunner());
echo $_warship1->strength();

echo '<br />';

$_compound = new army();
$_compound->addkind($_xxx);
$_compound->addkind($_warship1);
$_compound->addkind(new gunner());
echo $_compound->strength();
?>