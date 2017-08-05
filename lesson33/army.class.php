<?php

class army {
	private $_kind = array();
	private $_army = array();

	public function addkind($_kind) {
		$this->_kind[] = $_kind;
	}
	public function addArmy(army $_army) {
		if(!in_array($_army, $this->_army))
		$this->_army[] = $_army;

	}

	public function removeArmy(army $_army) {
		if(in_array($_army, $this->_army)) {
			//print_r(array(array_search($_army, $this->_army)=>$_army));
			//echo array_search($_army, $this->_army);
			//echo '<br />';
			unset($this->_army[array_search($_army, $this->_army)]);
			//print_r(unset($this->_army[array_search($_army, $this->_army)]));
			//print_r(array_udiff($this->_army,array(array_search($_army, $this->_army)=>$_army),create_function('$a,$b','return ($a === $b) ? 0:1;')));
			//$this->_army = array_udiff($this->_army,array(array_search($_army, $this->_army)=>$_army),create_function('$a,$b','return ($a === $b) ? 0:1;'));

		}
	}

	public function strength() {
		$_count = 0;
		foreach ($this->_army as  $_army) {
			$_count += $_army->strength();
		}
		foreach ($this->_kind as $_value) {
			$_count += $_value->strength();
		}
		return $_count;
	}

}

?>