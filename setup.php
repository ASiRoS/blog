<?php

require_once 'includes.php';

$connect = db_connect();

$sql = "CREATE DATABASE ". DB_NAME;

mysqli_query($connect, $sql);

$sql = "CREATE TABLE IF NOT EXISTS articles (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(250) NOT NULL,
description TEXT NOT NULL,
user_id INT(11)
)";

mysqli_query($connect, $sql);

$sql = "CREATE TABLE IF NOT EXISTS users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
login VARCHAR(30) NOT NULL,
password VARCHAR(60) NOT NULL
)";

mysqli_query($connect, $sql);

$sql = "CREATE TABLE IF NOT EXISTS comments (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
text TEXT NOT NULL,
article_id INT(30) NOT NULL,
user_id INT(50)
)";

mysqli_query($connect, $sql);