<?php

function check_if_not_empty(array $fields) {
    foreach ($fields as $key => $field) {
        if(empty($field)) {
            $key = htmlspecialchars($key);
            set_error("$key cannot be empty.");
            return true;
        }
    }

    return false;
}
