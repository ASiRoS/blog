<?php ob_start(); ?>
    <form action="article.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <fieldset>
            <legend>Login: </legend>
            <div class="article-input">
                <label for="login">Login:</label>
                <input name="login" id="login">
            </div>
            <div class="article-input">
                <label for="password">Password:</label>
                <input type="text" name="password" id="password">
            </div>

            <button type="submit">Login</button>
        </fieldset>
    </form>
<?php $content = ob_get_clean(); ?>

<?php require 'main.php'; ?>
