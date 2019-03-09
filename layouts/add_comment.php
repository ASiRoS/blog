<?php if(is_logged()): ?>
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
<?php endif; ?>