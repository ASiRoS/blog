<?php

require_once '../includes.php';

post_handler(function ($comment) {
    deny_access_unless_logged();

    $comment['article_id'] = $_GET['id'];

    check_if_not_empty($comment);

    add_comment($comment);

    refresh();
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

