<?php

function get_article($id) {
    $connect = db_connect();

    $id = mysqli_real_escape_string($connect, $id);

    $sql = "SELECT * FROM articles WHERE id = $id";

    $query = mysqli_query($connect, $sql);

    $article = mysqli_fetch_assoc($query);

    $article['author'] = get_user_by_id($article['user_id']);

    mysqli_close($connect);

    return $article;
}

function get_articles() {
    $connect = db_connect();

    $query = mysqli_query($connect, "SELECT * FROM articles");

    $articles = mysqli_fetch_all($query, MYSQLI_ASSOC);

    foreach($articles as &$article) {
        $author = get_user_by_id($article['user_id']);

        $article['author'] = $author;
    }

    mysqli_close($connect);

    return $articles;
}

function add_article(array $article) {
    $connect = db_connect();

    $article['name'] = mysqli_real_escape_string($connect, $article['name']);
    $article['description'] = mysqli_real_escape_string($connect, $article['description']);

    $user_id = get_user_id();

    $sql = "INSERT INTO articles(user_id, name, description) VALUES($user_id, '{$article['name']}', '{$article['description']}')";

    $query = mysqli_query($connect, $sql);


    if($query === false) {
        var_dump(mysqli_error($connect));
        exit;
    }

    return $query;
}
