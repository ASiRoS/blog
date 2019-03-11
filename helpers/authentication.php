<?php

function deny_access($message = 'You cannot enter here.', $deny = true) {
    $deny = is_callable($deny) ? $deny() : $deny;

    if($deny == true) {
        set_error($message);
        redirect('/');
    }
}

function deny_access_unless_logged($message = 'You must be logged in.') {
    if(!is_logged()) {
        deny_access($message);
    }
}

function is_logged() {
    return isset($_SESSION['user']);
}

function get_user_id() {
    if(is_logged()) {
        return $_SESSION['user']['id'];
    }
}

function get_user_login() {
    if(is_logged()) {
        return $_SESSION['user']['login'];
    }
}

function set_user($user) {
    $_SESSION['user'] = [];
    $_SESSION['user']['login'] = $user['login'];
    $_SESSION['user']['id'] = $user['id'];
}

function logout() {
    if(is_logged()) {
        unset($_SESSION['user']);
    }
}