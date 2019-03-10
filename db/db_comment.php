<?php

function get_comments($article_id) {
    $comments = select('comments', ['article_id' => $article_id]);

    foreach($comments as $key => $comment) {
        $comments[$key]['author'] = get_user_by_id($comment['user_id']);
    }

    return $comments;
}


function add_comment($comment) {
    $comment['user_id'] = get_user_id();

    insert('comments', $comment);
}
