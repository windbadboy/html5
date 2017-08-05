<?php

class clean extends decorator {
	public function experience() {
		return $this->_tile->experience() + 2;
	}
}

?>