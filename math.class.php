<?php
class math extends lesson {
	public function cost() {
		return 300 * $this->_num;
	}
	public function type() {
		return '你买的数学书合计:';
	}
}


?>