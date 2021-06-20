<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<link type="text/css" href="css/index.css" rel="stylesheet"/>
<link type="text/css" href="css/qikandetail.css" rel="stylesheet"/>
</head>
<script type="text/javascript" src="js/jquery-1.11.0.js"></script><!--调用js-->
<script type="text/javascript" src="js/slideShow.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script><!--/*左边滚动显示图片*/-->
<script type="text/javascript" src="js/scroll.js"></script><!--调用js滚动显示文字-->
<body>
<div id="all">
<?php
include 'conn.php';
include 'head.php';
include 'left.php';
?>
<div class="detail-right">
  <?php
  error_reporting( 0 );
  include( "conn.php" );
  $id = $_GET[ '$id' ];
  $sql = "select * from qikan where 刊名='$id'";
  $res = $conn->query( $sql );
  $row = mysqli_fetch_array( $res )
  ?>
  <div>
    <ul class="breadcrumb" style="border: 1px solid #B3B3B3; width: 880px; height: 25px; background:#F7F7F7; line-height: 25px;">
      <li><a href="index.php" >首页>></a><span class="divider"></span> </li>
      <li><a href="fenlei.php?$id=教育教学">期刊分类>></a><span class="divider"></span></li>
      <li><a href="fenlei.php?$id=<?php echo $row['所属分类'];?>"><?php echo $row['所属类型'];?>类期刊>></a><span class="divider"></span> </li>
      <li class="active"> <?php echo $row['刊名'];?> </li>
    </ul>
  </div>
  <div class="cart">
    <div class="cart-infowarp">
      <div  class="cart-infowarp1" > <span class="cart-infotitle"  >刊名:</br>
        </span>
        <div class="cart-info" ><?php echo $row['刊名'];?></div>
      </div>
      <div class="cart-infowarp1"> <span class="cart-infotitle">周期:</br>
        </span>
        <div class="cart-info"><?php echo $row['周期'];?></div>
      </div>
      <div class="cart-infowarp1"> <span class="cart-infotitle">出版地:</br>
        </span>
        <div class="cart-info"><?php echo $row['出版地'];?></div>
      </div>
      <div class="cart-infowarp1"> <span class="cart-infotitle">语种:</br>
        </span>
        <div class="cart-info"><?php echo $row['语种'];?></div>
      </div>
      <div class="cart-infowarp1"> <span class="cart-infotitle">开本:</br>
        </span>
        <div class="cart-info"><?php echo $row['开本'];?></div>
      </div>
      <div class="cart-infowarp1"> <span class="cart-infotitle">ISSN:</br>
        </span>
        <div class="cart-info"><?php echo $row['ISSN'];?></div>
      </div>
      <div class="cart-infowarp1"> <span class="cart-infotitle">CN:</br>
        </span>
        <div class="cart-info"><?php echo $row['CN'];?></div>
      </div>
      <div class="cart-infowarp1"> <span class="cart-infotitle">邮发代号:</br>
        </span>
        <div class="cart-info"><?php echo $row['邮发代号'];?></div>
      </div>
      <div class="cart-infowarp1"> <span class="cart-infotitle">更新日期:</br>
        </span>
        <div class="cart-info"><?php echo $row['添加日期'];?></div>
      </div>
      <div class="cart-infowarp1"> <span class="cart-infotitle">主办:</br>
        </span>
        <div class="cart-info"><?php echo $row['主办'];?></div>
      </div>
    </div>
    <div class="cart-instruction">
      <div class="cart-pic" >
        <div class="cart-title"><?php echo $row['刊名'];?></div>
        <img  class="picx" src="img/<?php echo $row['图片URL'];?>"/> </div>
    </div>
    <div class="cart-infowarp1" style="clear: both; margin-left: 50px;"> <span class="cart-infotitle">期刊简介:</br>
      </span>
      <div class="cart-info"><a style="width: 880px; height: 200px;"><?php echo $row['期刊简介'];?></a></div>
    </div>
  </div>
</div>
<?php
include 'qikandetail_bottom.php';
?>
</div>
</body>
</html>