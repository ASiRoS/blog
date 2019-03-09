<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <title>My Site</title>
</head>
<body>

<?php if(is_logged()): ?>
    <div>You're logged in as: <?=get_user_login()?></div>
<?php endif; ?>
<ul>
    <li><a href="../index.php">Main page</a></li>
    <li><a href="../pages/add_article.php">Add article</a></li>
    <?php if(is_logged()): ?>
        <li><a href="../pages/logout.php">Logout</a></li>
    <?php else: ?>
        <li><a href="../pages/login.php">Login</a></li>
        <li><a href="../pages/register.php">Register</a></li>
    <?php endif ?>
</ul>

<?php view(['success', 'errors']); ?>

<?php if(isset($errors)): ?>
    <ul>
        <?php foreach ($errors as $message): ?>
            <li><?=$message?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<?=$content;?>
</body>
</html>