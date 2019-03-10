<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <title>My Site</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="../index.php">Main page</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../pages/add_article.php">Add Article</a>
            </li>

            <?php if(is_logged()): ?>
                <li class="nav-item">
                    <a class="nav-link" href="../pages/logout.php">Logout</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="../pages/login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../pages/register.php">Register</a>
                </li>
            <?php endif ?>
        </ul>
    </div>
</nav>

<div class="container">
    <?php if(is_logged()): ?>
        <div class="mb-3">You're logged in as: <?=get_user_login()?></div>
    <?php endif; ?>

    <?php view(['success', 'errors']); ?>

    <?php if(isset($errors)): ?>
        <ul>
            <?php foreach ($errors as $message): ?>
                <li><?=$message?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <?=$content;?>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>