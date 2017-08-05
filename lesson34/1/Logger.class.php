<?php

class Logger extends Observer {
	public function update(Observable $_observable) {
		if($_observable->getret()) {
			echo 'you have logged in.';
		}
	}
}

?>