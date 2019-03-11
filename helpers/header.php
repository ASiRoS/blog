<?php

function error404() {
    header('HTTP/1.0 404 Not Found');
    die;
}

function refresh() {
    header('Refresh: 0');
    set_redirect( true);
    die;
}

function redirect($url) {
    header('Location: '. $url);
    set_redirect(true);
    die;
}

function is_redirect() {
    return isset($_SESSION['redirect']) && $_SESSION['redirect'] === true;
}

function set_redirect($bool) {
    $_SESSION['redirect'] = $bool;
}