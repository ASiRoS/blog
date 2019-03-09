<?php

function error404() {
    header('HTTP/1.0 404 Not Found');
    die;
}

function refresh() {
    header('Refresh: 0');
    die;
}

function redirect($url) {
    header('Location: '. $url);
    die;
}