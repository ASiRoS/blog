<?php if(!empty($errors = get_errors())): ?>
    <ul>
        <?php foreach ($errors as $message): ?>
            <li><?=$message?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>