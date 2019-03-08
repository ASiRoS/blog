<?php

require_once 'db.php';

function add_user(array $user) {
    $connect = db_connect();

    $user['login'] = mysqli_real_escape_string($connect, $user['login']);
    $user['password'] = mysqli_real_escape_string($connect, $user['password']);

    $sql = "INSERT INTO users(login, password) VALUES('{$user['login']}', '{$user['password']}')";

    $query = mysqli_query($connect, $sql);

    if($query === false) {
        var_dump(mysqli_error($connect));
        exit;
    }

    return $query;
}
