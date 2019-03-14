<?php 

require_once '../includes.php';

post_handler(function($user) {
	$user =  get_user($user);

	if($user) {
		set_user($user);
		
		//var_dump($_SESSION);
	}
});


view('login');