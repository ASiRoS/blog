<?php 

require_once 'vendor/autoload.php';


$db = new App\Database1('blog', 'localhost', 'root', '');

$articles = $db->select("SELECT * FROM Articles")
				->where()
				->execute()
				->fetchAll();

var_dump($articles);