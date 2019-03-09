<?php

require_once '../includes.php';

deny_access('Вы не можете войти на страницу входа, потому что уже вошли.', function() {
    return is_logged();
});

$handler = form_handler(function ($user) {
    $user = get_user($user);

    if($user) {
        set_user($user);

        set_success('Вы успешно вошли!');
    } else {
        set_error('Вы ввели неправильно логин или пароль.');
    }
});

view('login');

