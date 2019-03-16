<?php 

require_once 'vendor/autoload.php';
/*
$tx = new App\View('hello');



$twig = new Helpers\Twig();

$render = $twig->render('layout');


*/


$db = new App\Database('blog', 'localhost', 'root', '');

$articles = $db->select("SELECT * FROM Articles")
				->where()
				->execute()
				->fetchAll();

var_dump($articles);