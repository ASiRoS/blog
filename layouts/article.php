<article>
    <p class="author"><b>Author Name:</b><?php echo htmlspecialchars($article['author']['login']); ?></p>
    <p class="name"><b>Article Name:</b><?php echo htmlspecialchars($article['name']); ?></p>
    <p class="description"><b>Article Description:</b> <?php echo htmlspecialchars($article['description']); ?></p>
</article>

<hr>

<?php view(['add_comment', 'comments'], ['comments' => $comments]) ?>