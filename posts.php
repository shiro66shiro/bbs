<?php 
	$link = mysql_connect('localhost:8889', 'root', 'root');
	$bbs = mysql_select_db('bbs', $link);
	mysql_query("INSERT INTO contributions (title, body) VALUES ('${_POST['title']}', '${_POST['content']}')");
	mysql_close($link);
	header('Location: /bbs/index.php');
	exit;
?>
