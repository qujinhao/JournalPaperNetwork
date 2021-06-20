<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<script type="text/javascript" src="js/jquery-1.11.0.js"></script>
<body>
	<div class="CGALright">
  <div class="CGALright-title">
    <ul>
      <li><a href="index.php">首页&nbsp&nbsp/&nbsp&nbsp</a></li>
      <li><a href="CGAL.php">成功案例</a></li>
    </ul>
  </div>
  <div class="case-box">
		<?php
        include( "conn.php" );
        $sql = "select * from casesucess";
        $res = $conn->query( $sql );
		$all_num=mysqli_num_rows($res); //总条数
			$page_num=6; //每页条数
            $page_all_num = ceil($all_num/$page_num); //总页数
            $page=empty($_GET['page'])?1:$_GET['page']; //当前页数
	        $page=(int)$page; //安全强制转换
	        $limit_st = ($page-1)*$page_num; //起始数//
			
			
			
			$sql = "select * from casesucess limit $limit_st,$page_num";
			$res=$conn->query($sql);
      while($row=mysqli_fetch_array($res)){  
	  ?>
		  <div cla1ss="case-pic">
			  <a id="casepic<?php echo $row['id'];?>" href="case/<?php echo $row['图片URL'];?>">
				  <img alt="" src="case/<?php echo $row['图片URL'];?>" style=" float:left; width:280px; height: 250px; margin: 15px; border: 3px solid #D5D5D5;"/>
			  </a>  
		  </div>
	  
	  <?php		
	  }
				 $px = $page>=$page_all_num ? $page_all_num : $page+1 ;  //下一页
	    	     $ps = $page<=1 ? 1 : $page-1 ;  //上一页
    ?>
  <div class="page1">
    <ul>
      <li><a href='CGAL.php'>首页</a></li>
      <li><a href='CGAL.php?page=<?php echo $ps;?>'>上一页</a></li>
      <li><a href='CGAL.php?page=<?php echo $px;?>'>下一页</a></li>
      <li><a href='CGAL.php?page=<?php echo $page_all_num;?>'>尾页</a></li>
    </ul>
  </div>
</div>
</div>
</body>
 <script type="text/javascript">
		  $(document).ready(function(){
			  $("#casepic<?php echo $row['id'];?>").imgbox({
				  zoomOpacity' :true,
				  alignment' :'center'
			  });
		  });		  
	  </script>
</html>