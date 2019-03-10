<?php if(!empty($success = get_success())): ?>
    <ul>
        <?php foreach ($success as $message): ?>
            <li><?=$message?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

