<?php ob_start(); ?>
    <div class="articles">
            <article>
                <p class="name"><b>Article Name:</b> <?php echo htmlspecialchars($article['name']); ?></p>
                <p class="description"><b>Article Description:</b> <?php echo htmlspecialchars($article['description']); ?></p>
            </article>
    </div>
    <hr>
    <div class="comments">
        <?php foreach ($comments as $comment): ?>
            <p class="comment"><?=htmlspecialchars($comment['text']);?></p>
        <?php endforeach;; ?>
    </div>

    <form action="article.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <fieldset>
            <legend>Add comment</legend>
            <div class="article-input">
                <label for="description">Text:</label>
                <textarea name="text" id="text"></textarea>
            </div>

            <button type="submit">Add comment</button>
        </fieldset>
    </form>
<?php $content = ob_get_clean(); ?>

<?php require 'main.php'; ?>