<?php

require_once '../includes.php';

post_handler(function (array $user) {
    add_user($user);

    header('Location: /pages/login.php');
});

view('register');
