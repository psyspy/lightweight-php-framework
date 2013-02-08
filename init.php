<?php

include('core/plugins.class.php');
include('core/Smarty.class.php');
include('core/error.class.php');
include('core/theme.class.php');
include('core/user.class.php');
include('core/db.class.php');

function __autoload($className) {
	require_once 'plugins/'.$className.'.php';
}

$db = new db('localhost', 'root', 'framework');

?>