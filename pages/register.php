<?php

require_once '../includes.php';

form_handler(function (array $user) {
    add_user($user);

    header('Location: /pages/login.php');
});

view('register');
