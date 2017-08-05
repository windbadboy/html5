<?php

//疑问：为何decorator要继承tile,不继承行不行？
abstract class decorator extends tile{
	protected $_tile;
	public function __construct(tile $_tile) {
		$this->_tile = $_tile;

	}
}

?>