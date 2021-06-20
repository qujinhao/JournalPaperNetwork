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
	 <div class="left">
    <ul>
      <li ><a href="#">菜单</a></li>
      <li><a href="HouTai_qikan.php">期刊管理</a></li>
      <li><a href="#">查看留言</a></li>
      <li><a href="#">查看投稿</a></li>
      <li><a href="HouTai_cgal.php">成功案例</a></li>
      <li><a href="#">发表流程</a></li>
      <li><a href="HouTai_qkzs.php">期刊知识</a></li>
      <li><a href="#">职称知识</a></li>
      <li><a href="#">网站简介</a></li>
      <li><a href="#">管理员管理</a></li>
      <li><a href="#">推荐期刊</a></li>
    </ul>
  </div>
<?php
}
	
	else{
		echo "您无权登录，若有问题请联系网站管理员！！！";
	}
	
	?>
</body>
</html>