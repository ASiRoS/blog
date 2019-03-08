<?php

require_once 'db.php';

function get_comments($article_id) {
    $connect = db_connect();

    $query = mysqli_query($connect, "SELECT * FROM comments WHERE article_id = $article_id");

    $comments = mysqli_fetch_all($query, MYSQLI_ASSOC);

    mysqli_close($connect);

    return $comments;
}


function add_comment(int $article_id, string $text) {
    $connect = db_connect();

    $article_id = mysqli_real_escape_string($connect, $article_id);
    $text = mysqli_real_escape_string($connect, $text);

    $sql = "INSERT INTO comments(article_id, text) VALUES($article_id, '$text')";

    $query = mysqli_query($connect, $sql);

    if($query === false) {
        var_dump(mysqli_error($connect));
        exit;
    }

    mysqli_close($connect);

    return $query;
}
