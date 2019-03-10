<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="../index.php">Main page</a>
            </li>
            <?php if(is_logged()): ?>
                <li class="nav-item">
                    <a class="nav-link" href="../pages/add_article.php">Add Article</a>
                </li>
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