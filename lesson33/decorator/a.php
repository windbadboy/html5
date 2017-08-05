<?php

require 'tile.php';
require 'plain.class.php';
require 'highland.class.php';
require 'decorator.class.php';
require 'clean.class.php';
require 'polluted.class.php';

$_clean = new clean(new plain);
echo $_clean->experience();

echo '<br />';

$_polluted = new polluted(new plain);
echo $_polluted->experience();

echo '<br />';
/*
step 1:将new plain传递给polluted类的构造函数_construct(tile $_tile)
step 2:将step 1创建的对象new polluted()传递给clean类的构造函数
step 3:执行clean->experience方法
step 4:clean->experience里面的$this->_tile表示polluted对象，polluted对象的experience方法$this->_tile表示plain对象的experience方法，返回2
step 5:返回2-4=-2
step 6:返回-2+2=0

*/
$_cleanpolluted = new clean(new polluted(new plain));
echo $_cleanpolluted->experience();
?>