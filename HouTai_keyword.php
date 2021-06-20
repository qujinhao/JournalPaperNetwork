<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<body>
	<?php
	Session_start();
	$type=$_POST['type'];
	$content=$_POST['search'];
	$_SESSION['type'] = $type;
	$_SESSION['search'] = $content;
	header('Location:HouTai_search.php');
	?>
</body>
</html>