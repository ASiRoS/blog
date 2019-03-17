<?php

require_once 'vendor/autoload.php';

$db = new App\Database('localhost', 'root', '123456', 'blog');

$route = new App\Router\Router();

$route->get('/articles', function () use ($db) {
    $articles =
        $db
            ->select('articles')
            ->execute()
            ->fetchAll()
    ;
});

$route->get('/home', 'HomeController@index');

$route->match();