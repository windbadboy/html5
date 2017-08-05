<?php 

require 'image.class.php';
require 'gif.class.php';
require 'png.class.php';
require 'jpeg.class.php';
require 'factory.class.php';

$_image = factory::getImage(factory::JPEG);
echo $_image->getWidth();

?>