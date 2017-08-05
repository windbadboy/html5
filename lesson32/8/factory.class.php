<?php


class factory {
	const JPEG = 1;
	const PNG = 2;
	const GIF = 3;
	static public function getImage($_imagetype) {
		switch ($_imagetype) {
			case self::JPEG:
				return new jpeg();
				break;
			case self::PNG:
				return new png();
				break;
			case self::GIF:
				return new gif();
				break;			
		}
	}
}

?>