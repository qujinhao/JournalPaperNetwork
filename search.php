<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<link type="text/css" href="css/index.css" rel="stylesheet"/>
<link type="text/css" href="css/search.css" rel="stylesheet"/>
</head>
<meta http-equiv="Content-Type" content="text/html"charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="js/jquery-1.11.0.js"></script><!--调用js-->
<script type="text/javascript" src="js/slideShow.js"></script>
<script type="text/javascript" src="js/scroll.js"></script><!--调用js滚动显示文字-->
<body>
<div id="all">
  <?php
  include 'conn.php'; 
  include 'head.php';
  ?>
<div class="container">
  <div class="cart-title">搜索结果</div>
  <div class="cart-content">
    <?php  
			include("conn.php");
           // $type=$_POST['type'];
		//	$search=$_POST['search'];
                         session_start();	
        
         $type =$_SESSION['type'] ;			//创建Session变量保存用户名
	 $search=$_SESSION['search'];
			//$sql="select * from qikan where 所属类型='$type' and(刊名 like'%$search%'or 出版地 like'%$search%'or ISSN like'%$search%' or CN like'%$search%')"; 
       $sql="select * from qikan where 所属类型='$type' and(刊名 like'%$search%'or 出版地 like'%$search%'or ISSN like'%$search%' or CN like'%$search%')"; 
       $query=$conn->query($sql); 
            $all_num=mysqli_num_rows($query); //总条数
			$page_num=15; //每页条数
            $page_all_num = ceil($all_num/$page_num); //总页数
            $page=empty($_GET['page'])?1:$_GET['page']; //当前页数
	        $page=(int)$page; //安全强制转换
	        $limit_st = ($page-1)*$page_num; //起始数//
		 
           
              $sql="select * from qikan where 所属类型='$type' and(刊名 like'%$search%'or 出版地 like'%$search%'or ISSN like'%$search%' or CN like'%$search%') limit $limit_st , $page_num"; 
	          $query=$conn->query($sql);   
     	      $row=mysqli_fetch_array($query);  
                       $i=0;
                       if($row){
				do{ 
                        $i++;
			   ?>
    <div class="searchinfo">
      <dl >
        <dd><?php echo $i;?></dd>
        <dd> <a href="qikandetail.php?$id=<?php echo $row['刊名'];?>" style="color:#79BDE4;">『<?php echo str_ireplace($search,"<font color='#FF0000'>".$search."</font>",$row['所属类型']);?>』&nbsp;《<?php echo str_ireplace($search,"<font color='#FF0000'>".$search."</font>",$row['刊名']);?>》&nbsp;&nbsp;<?php echo str_ireplace($search,"<font color='#FF0000'>".$search."</font>",$row['出版地']);?></a>
          </li>
        </dd>
        <dt><?php echo (substr($row['添加日期'],3,5)) ;?></dt>
      </dl>
    </div>
    <?php
                  }while($row=mysqli_fetch_array($query));
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
				 $px = $page>=$page_all_num ? $page_all_num : $page+1 ;  
	    	     $ps = $page<=1 ? 1 : $page-1 ;
    ?>
    <div class="page">
      <ul>
        <li><a href='search.php' style="text-decoration: none; margin-left: 10px; border:1px solid #969696; border-radius: 5px; padding: 10px; color:#79BDE4; line-height:20px;">首页</a></li>
        <li><a href='search.php?page=<?php echo $ps?>' style="text-decoration: none; margin-left: 10px; border:1px solid #969696; border-radius: 5px; padding: 10px; color:#79BDE4; line-height:20px;">上一页</a></li>
        <li><a href='search.php?page=<?php echo $px?>' style="text-decoration: none; margin-left: 10px; border:1px solid #969696; border-radius: 5px; padding: 10px; color:#79BDE4; line-height:20px;">下一页</a></li>
        <li><a href='search.php?page=<?php echo $page_all_num?>' style="text-decoration: none; margin-left: 10px; border:1px solid #969696; border-radius: 5px; padding: 10px; color:#79BDE4; line-height:20px; ">尾页</a></li>
      </ul>
    </div>
  </div>
</div>
<?php
  include 'qikandetail_bottom.php';
  ?>
</div>
</body>
</html>