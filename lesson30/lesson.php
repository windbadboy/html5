<?php


require "lesson.class.php";
require "L.class.php";
require "english.class.php";
require "math.class.php";

$_lesson = new lesson(3,new math());
echo $_lesson->type().$_lesson->cost();

?>