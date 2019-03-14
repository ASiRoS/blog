<?php 

function set_user($user) {
	$_SESSION['user'] = [];
	$_SESSION['user']['login'] = $user['login'];
	$_SESSION['user']['password'] = $user['password'];
}

function is_logged() {
	return isset($_SESSION['user']); //if logged returns true
}

function get_user_login() {
	if (is_logged()):
	  return $_SESSION['user']['login'];
	endif;
}