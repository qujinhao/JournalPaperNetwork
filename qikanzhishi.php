<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<link type="text/css" href="css/index.css" rel="stylesheet"/>
</head>

<body>
<div id="all">
<?php
  include 'conn.php'; 
  include 'head.php';
  include 'CGAL_left.php';
	?>
<div class="right-all">
    <div class="right-head">
      <tr>
        <td><a href="index.php" style="padding-left: 10px; text-decoration: none; color: black;" >首页</a></td>
        <td><a href="qikanzhishi.php" style="text-decoration: none; color: black;">>>期刊知识</a></td>
      </tr>
    </div>
	 <div class="right-content">
      <table border="1px" height="250" width="930" cellspacing="0" float"left" bordercolor=" #E8ECEF">
        <tr>
          <td style=" width: 200px; ">序号</td>
          <td style=" width: 500px; ">期刊标题</td>
        </tr>
     <?php
        include( "conn.php" );
        $sql = "select id,期刊标题,期刊内容 from qkcontent";
        $res = $conn->query( $sql );
		$all_num=mysqli_num_rows($res); //总条数
			$page_num=14; //每页条数
            $page_all_num = ceil($all_num/$page_num); //总页数
            $page=empty($_GET['page'])?1:$_GET['page']; //当前页数
	        $page=(int)$page; //安全强制转换
	        $limit_st = ($page-1)*$page_num; //起始数//
			
			
			
			$sql = "select id,期刊标题,期刊内容 from qkcontent limit $limit_st,$page_num";
			$res=$conn->query($sql);
      while($row=mysqli_fetch_array($res)){  
	  ?>
        <tr bgcolor="white">
          <td><?php echo $row['id'];?><input type="hidden" name="id" value="<?php echo $row['id']; ?>">
			</td>
          <td><?php echo $row['期刊标题'];?></td>
        </tr>
        <?php
			}
		   $px = $page>=$page_all_num ? $page_all_num : $page+1 ;  //下一页
	    	     $ps = $page<=1 ? 1 : $page-1 ;  //上一页
		  ?>
      </table>
    </div>
	 <div class="page1" style="text-align: center;">
		 <tr>
			 <td><a href='qikanzhishi.php' style="text-decoration: none;  color:black;">首页</a></td>
			 <td><a href='qikanzhishi.php?page=<?php echo $ps;?>' style="text-decoration: none;  color:black;">上一页</a></td>
			 <td><a href='qikanzhishi.php?page=<?php echo $px;?>' style="text-decoration: none;  color:black;">下一页</a></td>
			 <td><a href='qikanzhishi.php?page=<?php echo $page_all_num;?>' style="text-decoration: none;  color:black;">尾页</a></td>
		 </tr>
  </div>
</div>
<?php
	include 'qikandetail_bottom.php';
	?>
</div>
</body>
</html>