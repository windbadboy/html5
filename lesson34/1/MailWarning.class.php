<?php

class MailWarning extends Observer{
	public function update(Observable $_observable) {
		$_msg = $_observable->getinfo();
		if(!$_observable->getret()) {
			echo 'wrong user or pw,A mail has sent to your mailbox.'.$_msg[0].':'.$_msg[1];
		}
	}
}

?>