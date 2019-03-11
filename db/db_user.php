<?php

function get_user_by_login($login) {
    $user = select('users', ['login' => $login], true);

    return $user;
}

function get_user_by_id($id) {
    return select('users', ['id' => $id], true);
}

function add_user(array $user) {
    $user['password'] = password_hash($user['password'], PASSWORD_BCRYPT);
    insert('users', $user);
}
