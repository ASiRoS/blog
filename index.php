<?php

require 'db/db_article.php';

$articles = get_articles();

require 'layouts/articles.php';