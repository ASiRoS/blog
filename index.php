<?php

require_once 'includes.php';

$articles = get_articles();

echo $render('articles', [
    'articles' => $articles,
    'is_logged' => is_logged(),
    'user_login' => get_user_login(),
    'errors' => get_errors(),
    'success' => get_success()
]);