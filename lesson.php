<?php


require "lesson.class.php";
require "english.class.php";
require "math.class.php";

$_lesson = new english(3);
echo $_lesson->type().$_lesson->cost();


echo '<br />';
$_lesson = new math(3);
echo $_lesson->type().$_lesson->cost();
?>