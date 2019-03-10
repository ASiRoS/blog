<?php

session_start();

function set_error($error) {
    if(!isset($_SESSION['errors'])) {
        $_SESSION['errors'] = [];
    }

    $_SESSION['errors'][] = $error;
}

function set_success($success) {
    if(!isset($_SESSION['success'])) {
        $_SESSION['success'] = [];
    }

    $_SESSION['success'][] = $success;
}

function get_success() {
    if(!isset($_SESSION['success'])) {
        return [];
    }

    return $_SESSION['success'];
}

function get_errors() {
    if(!isset($_SESSION['errors'])) {
        return [];
    }

    return $_SESSION['errors'];
}

function delete_success() {
    if(isset($_SESSION['success'])) {
        unset($_SESSION['success']);
    }
}

function delete_errors() {
    if(isset($_SESSION['errors'])) {
        unset($_SESSION['errors']);
    }
}

function delete_messages() {
    if(!is_redirect()) {
        delete_success();
        delete_errors();
    }

    set_redirect(false);
}