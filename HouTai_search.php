<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<link type="text/css" href="css/HouTai.css" rel="stylesheet"/>
<link type="text/css" href="css/HouTai_qikan.css" rel="stylesheet"/>
</head>
<style type="text/css">
	.container{
		 width: 78%;
          position: absolute;
          top: 78px;
          left: 24%;
		 background: white;
		border: 1px solid #FFFFFF;
	}
</style>
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
  <div class="container">
    <div class="cart-title">搜索结果</div>
    <div class="cart-content">
      <?php
      include( "conn.php" );

      session_start();

      $type = $_SESSION[ 'type' ]; //创建Session变量保存用户名
      $search = $_SESSION[ 'search' ];

      $sql = "select * from qikan where 所属类型='$type' and(刊名 like'%$search%'or 出版地 like'%$search%'or ISSN like'%$search%' or CN like'%$search%')";
      $query = $conn->query( $sql );
      $all_num = mysqli_num_rows( $query ); //总条数
      $page_num = 15; //每页条数
      $page_all_num = ceil( $all_num / $page_num ); //总页数
      $page = empty( $_GET[ 'page' ] ) ? 1 : $_GET[ 'page' ]; //当前页数
      $page = ( int )$page; //安全强制转换
      $limit_st = ( $page - 1 ) * $page_num; //起始数//


      $sql = "select * from qikan where 所属类型='$type' and(刊名 like'%$search%'or 出版地 like'%$search%'or ISSN like'%$search%' or CN like'%$search%') limit $limit_st , $page_num";
      $query = $conn->query( $sql );
      $row = mysqli_fetch_array( $query );
      $i = 0;
      if ( $row ) {
        do {
          $i++;
          ?>
      <div class="searchinfo">
        <tr >
          <td><?php echo $i;?></td>
          <td> <a href="#" style="color:#79BDE4;">『<?php echo str_ireplace($search,"<font color='#FF0000'>".$search."</font>",$row['所属类型']);?>』&nbsp;《<?php echo str_ireplace($search,"<font color='#FF0000'>".$search."</font>",$row['刊名']);?>》&nbsp;&nbsp;<?php echo str_ireplace($search,"<font color='#FF0000'>".$search."</font>",$row['出版地']);?></a>
          </td>
          <td><?php echo (substr($row['添加日期'],3,5)) ;?></td>
        </tr>
      </div>
      <?php
      }
      while ( $row = mysqli_fetch_array( $query ) );
      }
      else {
        ?>
      <div class="searchinfo">
        <center>
          您检索的信息资源不存在！
        </center>
      </div>
      <?php
      }
      $px = $page >= $page_all_num ? $page_all_num : $page + 1;
      $ps = $page <= 1 ? 1 : $page - 1;
      ?>
       <div class="page1">
		 <tr>
			 <td><a href='HouTai_search.php' style="text-decoration: none;  color:black;">首页</a></td>
			 <td><a href='HouTai_search.php?page=<?php echo $ps;?>' style="text-decoration: none;  color:black;">上一页</a></td>
			 <td><a href='HouTai_search.php?page=<?php echo $px;?>' style="text-decoration: none;  color:black;">下一页</a></td>
			 <td><a href='HouTai_search.php?page=<?php echo $page_all_num;?>' style="text-decoration: none;  color:black;">尾页</a></td>
		 </tr>
  </div>
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