<?php 

function add_user($user) {
	$con = db_connect();

	$sql = "INSERT INTO Users(name, password) VALUES ('{$user['name']}', '{$user['password']}')";

	$query = mysqli_query($con, $sql);

}

function get_user($user) {
	$con = db_connect();

	$sql = "SELECT * FROM Users WHERE login = '{$user['login']}' AND password = '{$user['password']}'";

	$query = mysqli_query($con, $sql);

	$user = mysqli_fetch_assoc($query);

	return $user;
}