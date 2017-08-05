<?php

require 'kind.class.php';
require 'swordsman.class.php';
require 'gunner.class.php';
require 'army.class.php';
require 'warship.class.php';
$_army1 = new army();
$_army1->addkind(new swordsman());
$_army1->addkind(new swordsman());
$_army1->addkind(new gunner());
echo $_army1->strength();

echo '<br />';

$_army2 = new army();
$_army2->addkind(new swordsman());
$_army2->addkind(new swordsman());
$_army2->addkind(new swordsman());
echo $_army2->strength();

echo '<br />';

$_army6 = new army();
$_army6->addkind(new swordsman());
$_army6->addkind(new swordsman());
$_army6->addkind(new gunner());
$_army6->addkind(new gunner());
echo $_army6->strength();

echo '<br />';


$_army3 = new army();
$_army3->addArmy($_army1);
$_army3->addArmy($_army2);
$_army3->addArmy($_army6);

// $_army3->addkind(new swordsman());
// $_army3->addkind(new swordsman());
//$_army3->removeArmy($_army6);
//$_army3->removeArmy($_army1);
$_army3->removeArmy($_army2);
echo '第3支部队的攻击力:'.$_army3->strength();


echo '<br />';

$_warship1 = new warship();
$_warship1->addkind(new swordsman());
$_warship1->addkind(new swordsman());
$_warship1->addkind(new gunner());
echo $_warship1->strength();
?>