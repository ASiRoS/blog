<?php

require '../db/db_article.php';
require '../helpers/form.php';

form_handler(function ($article) {
    add_article($article);

    header('Location: index.php');
});

?>

<?php ob_start(); ?>
    <form action="" method="POST">
        <fieldset>
            <legend>Add article</legend>
            <div class="article-input">
                <label for="name">Article's name:</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="article-input">
                <label for="description">Article's description:</label>
                <textarea name="description" id="description"></textarea>
            </div>

            <button type="submit">Add article</button>
        </fieldset>
    </form>
<?php $content = ob_get_clean(); ?>

<?php require '../layouts/main.php'; ?>