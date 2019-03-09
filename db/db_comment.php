<?php

function get_comments($article_id) {
    $connect = db_connect();

    $query = mysqli_query($connect, "SELECT * FROM comments WHERE article_id = $article_id");

    if($query === false) {
        dd(mysqli_error($connect));
    }

    $comments = mysqli_fetch_all($query, MYSQLI_ASSOC);

    foreach($comments as &$comment) {
        $author = get_user_by_id($comment['user_id']);

        $comment['author'] = $author;
    }

    mysqli_close($connect);

    return $comments;
}


function add_comment(int $article_id, string $text) {
    $connect = db_connect();

    $article_id = mysqli_real_escape_string($connect, $article_id);
    $text = mysqli_real_escape_string($connect, $text);

    $user_id = get_user_id();

    $sql = "INSERT INTO comments(user_id, article_id, text) VALUES($user_id, $article_id, '$text')";

    $query = mysqli_query($connect, $sql);

    if($query === false) {
        dd(mysqli_error($connect));
    }

    mysqli_close($connect);

    return $query;
}
