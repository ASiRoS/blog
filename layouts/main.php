<!DOCTYPE html>
<html>
<head>
	<title>My site 3</title>
</head>
<body>
<ul class='main-nav'>
	<li><a href="../index.php">Home page</a></li>
	<li><a href="../pages/add_article.php">Add article</a></li>
	<li><a href="../pages/login.php">Log in</a></li>
	<li><a href="../pages/register.php">Register</a></li>
</ul>

<? if(is_logged()): ?>
	<div>You are logged as <?=get_user_login()?></div>
<? endif; ?>


<?=$content?>
</body>
</html>


<style>
	.main-nav{
		display: flex;
		list-style: none;

		width: 100%;
		min-height: 30px;

		margin: 0;
		padding: 0;

		background-color: rgba(0, 0, 0, 0.3);	
	}

	.main-nav a {
		font-size: 25px;
		color: black;
		text-decoration: none;
	}

	.main-nav li {
		min-width: 13	0px	;
		margin-right: 30px;
		border: 1px solid black;

	}

	input {
		margin-top: 30px;
	}

	input[name="description"] {
		min-width: 250px;
		min-height: 100px;
	}

	legend {
		color: gray;
	}

	form {
		margin-top: 30px;
	}

	button {
		margin-top: 30px;

		min-width: 180px;
		min-height: 50px; 
	}

</style>