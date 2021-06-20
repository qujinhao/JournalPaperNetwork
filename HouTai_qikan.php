<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<link type="text/css" href="css/HouTai.css" rel="stylesheet"/>
<link type="text/css" href="css/HouTai_qikan.css" rel="stylesheet"/>
</head>


<body>
<?php
session_start();
if ( isset( $_SESSION[ 'name' ] ) ) {
    ?>
<div class="all">
<?php
session_start();
include 'conn.php';
include 'HouTai_head.php';
include 'HouTai_left.php';
include 'HouTai_right.php';
?>
<?php
}
	
	else{
		echo "您无权登录，若有问题请联系网站管理员！！！";
	}
	
	?>


</div>
</body>
</html>