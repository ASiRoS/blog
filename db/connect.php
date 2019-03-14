<?php 

function db_connect() {
	$connect = mysqli_connect('localhost', 'root', '', 'blog');
	return $connect;
}
