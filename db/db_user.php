<?php

function get_user(array $user) {
    $user = select('users', $user, true);

    return $user;
}

function get_user_by_id($id) {
    return select('users', ['id' => $id], true);
}

function add_user(array $user) {
    insert('users', $user);
}
