<?php

abstract class Observable {
	abstract function attach(Observer $_observer);
	abstract function detach(Observer $_observer);
	abstract function notify();
}

?>