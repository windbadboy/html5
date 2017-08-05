<?php
class english extends lesson {
	public function cost() {
		return 180 * $this->_num;
	}
	public function type() {
		return '你买的英文书合计:';
	}
}


?>