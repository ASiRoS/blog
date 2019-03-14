<?php 

require_once '../includes.php';

post_handler(function($user) {
	add_user($user);

	//header('Location: index.php');
});

view('register');