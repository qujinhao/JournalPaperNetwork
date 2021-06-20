<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<link type="text/css" href="css/HouTai.css" rel="stylesheet"/>
<link type="text/css" href="css/HouTai_qikan_edit.css" rel="stylesheet"/>
<link type="text/css" href="css/HouTai_qikan_edit2.css" rel="stylesheet"/>
</head>


<body>
<?php
session_start();
if ( isset( $_SESSION[ 'name' ] ) ) {
    ?>
<div class="all">
<?php
include 'conn.php';
include 'HouTai_head.php';
include 'HouTai_left.php';
?>
 <div class="detail-right">
    <?php
    error_reporting( 0 );
    include( "conn.php" );
    $id = $_GET[ '$id' ];
    $sql = "select * from casesucess where id='$id'";
    $res = $conn->query( $sql );
    $row = mysqli_fetch_array( $res )
    ?>
    <div class="qikan_edit_head">
        <tr>
          <td><a href="HouTai.php" style="text-decoration: none;  color: #E8ECEF; padding-left: 40px;">首页>></a></td>
          <td><a href="HouTai_cgal.php" style="text-decoration: none;  color: #E8ECEF;">成功案例>></a></td>
          <td><a href="HouTai_cgal_edit.php" style="text-decoration: none;  color: #E8ECEF;">删除</a></td>
        </tr>
    </div>
	  <div class="info-all">
		  <div class="info-content">
			  <form method="post" action="HouTai_cgal_delprocess.php" enctype="multipart/form-data">
				  <table border="1px" height="300" width="100%" cellspacing="0" float"left" bordercolor=" #E8ECEF">
					  <tr>
						 <th>ID：</th>
						  <td><input class="common-text" name="ID" size="30" value="<?php echo $row['id'];?>" type="text"></td>
					  </tr>
					 <tr>
						 <th>图片URL：</th>
						  <td><input class="common-text" name="TPURL" size="30" value="<?php echo $row['图片URL'];?>" type="text"></td>
					  </tr>
					  <tr>
                    <th></th>
                    <td ><input class="btn btn-primary" value="删除" type="submit" name="mySent" id="btn-center" >
                      <input class="btn" onclick="history.go(-1)" value="返回" type="button"></td>
                  </tr>
				  </table>
			  </form>
		  </div>
	  </div>
  </div>
<?php
}
	
	else{
		echo "您无权登录，若有问题请联系网站管理员！！！";
	}
	
	?>
</body>
</html>