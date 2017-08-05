<?php
class english extends L{
	public function cost(lesson $_lesson) {
		return 180 * $_lesson->_num;
	}
	public function type() {
		return '你买的英文书合计:';
	}
}


?>