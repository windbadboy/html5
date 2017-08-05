<?

class factory {
	private $_db;
	static private $_instance;
	static public function getUser() {
		if(!(self::$_instance instanceof UserAction)) {
			self::$_instance = new UserAction();
					echo 'obj created.';
		}
		return self::$_instance;

		// return new UserAction();
	}
}

?>