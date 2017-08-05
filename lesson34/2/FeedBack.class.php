<?php

class FeedBack {
	public function execute(Context $_context) {
		if($_context->getParam('name') && $_context->getParam('date') && $_context->getParam('info')) {
			return true;
		}
		else {
			return false;
		}		
	}
}

?>