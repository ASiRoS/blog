<?php 
require_once '../includes.php';

post_handler(function($article) {
	add_article($article);

	header('Location: ../index.php');
});

view('add_article');