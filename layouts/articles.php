<div class="articles">
    <?php foreach ($articles as $article): ?>
        <article>
            <a class="name" href="/pages/article.php?id=<?=$article['id']?>"><?=$article['name']?></a>
        </article>
        <hr>
    <?php endforeach; ?>
</div>