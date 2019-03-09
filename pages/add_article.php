<?php

require_once '../includes.php';

deny_access_unless_logged();

post_handler(function ($article) {
    add_article($article);

    redirect('/index.php');
});

view('add_article');
