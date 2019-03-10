<?php if(is_logged()): ?>
    <form action="article.php?id=<?php echo $_GET['id']; ?>" method="POST" class="mb-5">
        <fieldset>
            <legend>Add comment:</legend>
            <div class="form-group">
                <label class="sr-only" for="description">Text:</label>
                <textarea name="text" class="form-control" id="text"></textarea>
            </div>

            <button class="btn btn-primary" type="submit">Add comment</button>
        </fieldset>
    </form>
<?php endif; ?>