<?php

class warship extends kind{
	protected $_kind = array();






	public function strength() {
		$_count = 0;

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