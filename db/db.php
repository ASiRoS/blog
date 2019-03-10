<?php

const DB_HOST = "localhost";
const DB_USERNAME = "root";
const DB_PASSWORD = "";
const DB_NAME = "blog";

function db_connect() {
    $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}


function insert($table, $fields) {
    $connect = db_connect();

    $tableFields = [];
    $fieldsValues = [];

    foreach ($fields as $key => $value) {
        $tableFields[] = $key;

        $escaped = mysqli_real_escape_string($connect, $value);
        $fieldsValues[] = '"'. $escaped . '"';
    }

    $tableFields = implode(', ', $tableFields);
    $fieldsValues = implode(', ', $fieldsValues);

    $sql = "INSERT INTO $table($tableFields) VALUES($fieldsValues)";

    $query = mysqli_query($connect, $sql);

    if($query === false) {
        dd(mysqli_error($connect));
    }
}

function select($table, $fields = [], $one = false) {
    $connect = db_connect();

    $sql = "SELECT * FROM $table";

    $i = 0;
    $count = count($fields) - 1;

    if($count >= 0) {
        $sql .= " WHERE";
    }

    foreach ($fields as $key => $value) {
        $escaped = '"' . mysqli_real_escape_string($connect, $value) . '"';

        $sql .= " $key = $escaped";

        if($i !== $count) {
            $sql .= 'AND ';
        }

        $i++;
    }

    $query = mysqli_query($connect, $sql);

    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

    if(count($result) === 1 && $one === true) {
       return $result[0];
    }

    mysqli_close($connect);

    return $result;
}