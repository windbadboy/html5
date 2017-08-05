<?php

class Variable extends Compile {
	public function expression($_parse,$_str) {
		$_pattern = '/\{\$([\w]+)\}/e';
		if(preg_match($_pattern,$_str)) {
			//{$name},{$age}
			$_str = preg_replace($_pattern, "\$_parse->_vars['$1']", $_str);
		}
		return $_str;

	}
}

?>