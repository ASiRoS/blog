<?php

require_once 'db.php';

function get_article($id) {
    $connect = db_connect();

    $id = mysqli_real_escape_string($connect, $id);

    $sql = "SELECT * FROM articles WHERE id = $id";

    $query = mysqli_query($connect, $sql);

    $article = mysqli_fetch_assoc($query);

    mysqli_close($connect);

    return $article;
}

function get_articles() {
    $connect = db_connect();

    $query = mysqli_query($connect, "SELECT * FROM articles");

    $articles = mysqli_fetch_all($query, MYSQLI_ASSOC);

    mysqli_close($connect);

    return $articles;
}

function add_article(array $article) {
    $connect = db_connect();

    $article['name'] = mysqli_real_escape_string($connect, $article['name']);
    $article['description'] = mysqli_real_escape_string($connect, $article);

    $sql = "INSERT INTO articles(name, description) VALUES('{$article['name']}', '{$article['description']}')";

    $query = mysqli_query($connect, $sql);


    if($query === false) {
        var_dump(mysqli_error($connect));
        exit;
    }

    return $query;
}
