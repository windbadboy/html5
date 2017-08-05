<?php
class sports extends L {
	public function cost(lesson $_lesson) {
		return 300 * $_lesson->_discount * $_lesson->_num;

	}
	public function type(lesson $_lesson) {
		return '你买的'.$_lesson->_type.'体育书合计:';
	}
}


?>