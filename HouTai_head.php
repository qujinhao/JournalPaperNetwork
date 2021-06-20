<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
session_start();
if ( isset( $_SESSION[ 'name' ] ) ) {
    ?>
	 <div class="head">
    <tr>
      <td><a href="HouTai.php" style="text-decoration: none; color:white; margin-left:5%; ">后台管理系统</a></td>
      <td><a href="HouTai.php" style="text-decoration: none; color:white; margin-left:70%;">欢迎您!</a></td>
      <td><a href="HouTai.php" style="text-decoration: none; color:white; margin-left:20px;"><?php echo $_SESSION['name'];?></a></td>
      <td><a href="admin.php" style="text-decoration: none; color:white; margin-left:20px;">退出</a></td>
    </tr>
  </div>
<?php
}
	
	else{
		echo "您无权登录，若有问题请联系网站管理员！！！";
	}
	
	?>
</body>
</html>