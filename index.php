<!DOCTYPE html> 
<html lang="ja"> 
	<head> 
		<meta charset="UTF-8">
			<title>掲示板</title>
	</head> 
	<body>
		<form action="/bbs/posts.php" method="POST">
			<input type="text" name="title"><br>
			<textarea name="content"></textarea><br>
			<input type="submit">
		</form>
		<?php 
			$link = mysql_connect('localhost:8889', 'root', 'root');
			$bbs = mysql_select_db('bbs', $link);
			$result = mysql_query('SELECT id, title, body from contributions');
			while ($row = mysql_fetch_assoc($result)) { echo("${row['id']}"); echo("${row['title']}"); echo("${row['body']}"); echo("<br>");}
			mysql_close($link);
			

		?>

	</body>
</html>