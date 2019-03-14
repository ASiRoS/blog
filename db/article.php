<?php 
function get_article($id) {
	$con = db_connect();

	$query = mysqli_query($con, "SELECT * FROM Articles WHERE id = $id");

	$article = mysqli_fetch_assoc($query);

	return $article;
}

function get_articles() {
	$con = db_connect();

	$query = mysqli_query($con, "SELECT * FROM Articles");

	$articles = mysqli_fetch_all($query, MYSQLI_ASSOC);

	return $articles;
}

function add_article($article) {
	$con = db_connect();

	$sql = "INSERT INTO Articles (name, description) VALUES ('{$article['name']}','{$article['description']}')";


	$query = mysqli_query($con, $sql);
	
}

 ?>