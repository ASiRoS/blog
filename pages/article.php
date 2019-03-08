<?php

require '../db/db_article.php';
require '../db/db_comment.php';
require '../helpers/form.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $article = get_article($id);

    $comments = get_comments($id);
}


form_handler(function ($comment) {
    add_comment($_GET['id'], $comment['text']);

    header('Location:'. $_SERVER['REQUEST_URI']);
});
?>

<?php require '../layouts/article.php'; ?>
