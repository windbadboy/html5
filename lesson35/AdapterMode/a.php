<?php

require 'ErrorObject.class.php';
require 'LogToTxt.class.php';
require 'LogToXml.class.php';
require 'ErrorXmlObject.class.php';
$_log = new LogToXml(new ErrorXmlObject('404:page not found.'));
$_log->write();

?>