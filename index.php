<?php

require_once 'includes.php';

$articles = get_articles();

echo $render('articles', [
    'articles' => $articles,
]);