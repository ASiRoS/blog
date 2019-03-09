<div class="comments">
    <?php foreach ($comments as $comment): ?>
        <div class="comment">
            <div class="author"><b>Author: </b><?=htmlspecialchars($comment['author']['login']);?></div>
            <div class="text"><b>Text: </b><?=htmlspecialchars($comment['text']);?></div>
        </div>
    <?php endforeach;; ?>
</div>

