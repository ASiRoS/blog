<?php foreach($articles as $article):?>
	<h3>
		<a href="../pages/article.php?id=<?=$article['id']?>">
			<?=$article['name']?>
		</a>
	</h3>
<? endforeach;