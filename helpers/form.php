<?php

function form_handler(callable $function) {
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $function($_POST);
    }
}