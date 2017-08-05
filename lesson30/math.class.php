<?php
class math extends L {
	public function cost(lesson $_lesson) {
		return 300 * $_lesson->_num;
	}
	public function type() {
		return '你买的数学书合计:';
	}
}


?>