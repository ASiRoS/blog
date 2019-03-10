<?php

require_once '../includes.php';

post_handler(function (array $user) {
    add_user($user);

    set_success('You registered successfully, now you can enter.');

    redirect('/pages/login.php');
});

view('register');
