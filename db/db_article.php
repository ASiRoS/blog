<?php

function get_article($id) {
    $article = select('articles', ['id' => $id], true);
    $article['author'] = get_user_by_id($article['user_id']);

    return $article;
}

function get_articles() {
    $articles = select('articles');

    foreach($articles as $key => $article) {
        $articles[$key]['author'] = get_user_by_id($article['user_id']);
    }

    return $articles;
}

function add_article(array $article) {
    $article['user_id'] = get_user_id();

    insert('articles', $article);
}
