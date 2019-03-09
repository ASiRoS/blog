<?php

require_once '../includes.php';

form_handler(function ($comment) {
    deny_access_unless_logged();

    add_comment($_GET['id'], $comment['text']);

    header('Location:'. $_SERVER['REQUEST_URI']);
});

if(isset($_GET['id'])) {
    $article_id = $_GET['id'];

    $article = get_article($article_id);

    if(!$article) {
        error404();
    }

    $comments = get_comments($article_id);

    view('article', ['article' => $article, 'comments' => $comments]);
} else {
    error404();
}

