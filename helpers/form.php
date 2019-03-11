<?php

function post_handler(callable $function) {
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        return $function($_POST);
    }
}