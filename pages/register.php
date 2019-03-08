<?php

require_once '../db/db_user.php';
require_once '../helpers/form.php';

form_handler(function (array $user) {
    add_user($user);

    header('Location: /pages/login.php');
});

require_once '../layouts/register.php';

