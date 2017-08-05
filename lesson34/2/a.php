<?php

require 'Factory.class.php';
require 'Controller.class.php';
require 'Context.class.php';

$_c = new Controller();
$_context = $_c->getContext();
$_context->addParam('action','Login');
$_context->addParam('user','admin');
$_context->addParam('pass','123');
$_context->setSucc('Login successfully.');
$_context->setError('Login failed.');
$_c->process();

$_context->addParam('action','FeedBack');
$_context->addParam('name','admin');
$_context->addParam('date','123');
$_context->addParam('info','');
$_context->setSucc('feedback successfully.');
$_context->setError('feedback failed.');
$_c->process();
?>