<?php ob_start(); ?>
    <div class="articles">
        <?php foreach ($articles as $article): ?>
            <article>
                <a class="name" href="/pages/article.php?id=<?=$article['id']?>"><?php echo $article['name']; ?></a>
            </article>
            <hr>
        <?php endforeach; ?>
    </div>
<? $content = ob_get_clean(); ?>

<?php require 'main.php'; ?>