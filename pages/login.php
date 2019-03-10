<?php

require_once '../includes.php';

deny_access('You can\'t enter login page.', is_logged());

$handler = post_handler(function ($request) {
    $user = get_user_by_login($request['login']);

    if(password_verify($request['password'], $user['password'])) {
        set_user($user);
        set_success('You logged in successfully!');

        redirect('/');
    } else {
        set_error('You have entered login or password wrong.');
    }
});

view('login');

