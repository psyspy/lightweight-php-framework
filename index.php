<?php
	session_start();
	$_SESSION['user']['session_id'] = 123;
	
	include('init.php');
	
	theme::init();
	
	$logged_in_user = NULL;
	if(array_key_exists('user',$_SESSION)){
		$logged_in_user = new user();
		$logged_in_user = $logged_in_user->check_credentials($_SESSION['user']['session_id']);
	}
	
	//print_r($logged_in_user);
	
	//$db->query('select * from blocks where delta = :one', array(':one'=>1));
	//print_r($db->assoc());
	
	plugins::start('plugins/');	
	
	plugins::call('core_execute');
	
	theme::show();
	error::show();

	//	theme::append('a', 'test');
	//theme::append('a', 'b');
	//theme::append('b', '123');
	//	plugins::call('core_execute');
	//echo plugins::call('core_display');	
	//plugins::call('foo', array($test));

	?>
