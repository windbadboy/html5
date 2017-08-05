<?php

abstract class Handler {

	abstract public function read();
	abstract public function write();
	static function getInstance($_file) {
		if($_file == 'xml') {
			return new XmlHandler;
		}
		else {
			return new TxtHandler;
		}
	}
}


class XmlHandler extends Handler {
	public function read() {
		echo 'Loading Xml file!';
	}
	Public function write() {
		echo 'Writing Xml file!';
	}
}

class TxtHandler extends Handler {
	public function read() {
		echo 'Loading txt file!';
	}
	public function write() {
		echo 'Writing txt file!';
	}
}


$_myobject = Handler::getInstance('txt');
$_myobject->read();
$_myobject->write();
?>