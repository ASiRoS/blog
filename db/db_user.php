<?php

function get_user(array $user) {
    $connect = db_connect();

    $login = mysqli_real_escape_string($connect, $user['login']);

    $password = mysqli_real_escape_string($connect, $user['password']);

    $sql = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";

    $query = mysqli_query($connect, $sql);

    if(!$query) {
        return;
    }

    $user = mysqli_fetch_assoc($query);

    mysqli_close($connect);

    return $user;
}

function get_user_by_id($id) {
    $connect = db_connect();

    $id = mysqli_real_escape_string($connect, $id);

    $sql = "SELECT * FROM users WHERE id = $id";

    $query = mysqli_query($connect, $sql);

    if(!$query) {
        return;
    }

    $user = mysqli_fetch_assoc($query);

    mysqli_close($connect);

    return $user;
}

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
