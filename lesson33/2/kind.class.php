<?php

abstract class kind {
	protected $_kind = array();
	abstract function strength();
	public function addkind(kind $_kind) {
		$this->_kind[] = $_kind;
	}
}

?>