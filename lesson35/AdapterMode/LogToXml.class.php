<?php

class LogToXml {
	private $_errobject;
	public function __construct(ErrorObject $_errobject) {
		$this->_errobject = $_errobject;
	}

	public function write() {
		$_xml = '<root>'."\r\n";
		$_xml .= '<line>'.$this->_errobject->getLine().'</line>'."\r\n";
		$_xml .= '<text>'.$this->_errobject->getText().'</text>'."\r\n";
		$_xml .= '</root>'."\r\n";
		file_put_contents('log.xml', $_xml);
	}	

}

?>