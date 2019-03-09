<?php

function error404() {
    header('HTTP/1.0 404 Not Found');
    die;
}

function redirect($url) {
    header('Location: '. $url);
    exit;
}