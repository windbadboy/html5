<?php

class warship {
	private $_kind = array();
	private $_warship = array();

	public function addkind($_kind) {
		if(count($this->_kind) < 5) {
			$this->_kind[] = $_kind;			
		}

	}
	public function addwarship(warship $_warship) {
		if(!in_array($_warship, $this->_warship))
		$this->_warship[] = $_warship;

	}

	public function removewarship(warship $_warship) {
		if(in_array($_warship, $this->_warship)) {
			unset($this->_warship[array_search($_warship, $this->_warship)]);
		}
	}

	public function strength() {
		$_count = 0;
		foreach ($this->_warship as  $_warship) {
			$_count += $_warship->strength();
		}
		foreach ($this->_kind as $_value) {

			if($_value instanceof swordsman) {
				$_temp = $_value->strength() - 2;
			}
			if($_value instanceof gunner) {
				$_temp = $_value->strength() - 5;				
			}
			$_count += $_temp;			
		}
		return $_count;
	}

}


?>