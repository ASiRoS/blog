<?php

require_once 'vendor/autoload.php';

$db = new App\Database('localhost', 'root', '123456', 'blog');

$route = new \App\Router();

$route->get('/articles', function () use ($db) {
    $articles =
        $db
            ->select('articles')
            ->execute()
            ->fetchAll()
    ;

    var_dump($articles);
});

$route->match();