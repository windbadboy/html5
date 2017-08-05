<?php


require "lesson.class.php";
require "L.class.php";
require "science.class.php";
require "art.class.php";
require "computer.class.php";
require "english.class.php";
require "math.class.php";
require "sports.class.php";

$_science = new science(3,new sports());
echo $_science->type().$_science->cost();

echo '<br />';

$_art = new art(3,new sports());
echo $_art->type().$_art->cost();

echo '<br />';

$_computer = new computer(3,new sports());
echo $_computer->type().$_computer->cost();
?>