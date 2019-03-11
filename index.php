<?php

require_once 'vendor/autoload.php';

$db = new App\Database('localhost', 'root', '', 'blog');

$users = $db
    ->select('articles')
    ->where(['id' => 3])
    ->execute()
    ->fetchAll()
;

var_dump($users);