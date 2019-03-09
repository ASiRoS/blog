<?php

require_once 'includes.php';

$articles = get_articles();

view('articles', ['articles' => $articles]);