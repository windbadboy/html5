<?

class polluted extends decorator {
	public function experience() {
		return $this->_tile->experience() - 4;
	}
}

?>