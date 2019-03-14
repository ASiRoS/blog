<?php 
require_once '../includes.php';

$id = $_GET['id'];

$article = get_article($id);

view('article', ['article'=> $article]);