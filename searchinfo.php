<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<link type="text/css" rel="stylesheet" href="style.css">	
	<style>
		.page{
			width: 1050px;
			height: 40px;
			
			
		}
		.page ul{
			list-style-type:none;
			
			float: left;
			
		}
		.cart-title{
			border-bottom: 1px solid #A5A7A4;
			width: 1050px;
			height: 20px;
			float: left;
			text-align: center;
			font-weight: bold;
			padding-top:30px;
			padding-bottom: 20px;
			
		}
		
		.page li:nth-child(1){
			 margin-left: 250px;
		}
		
		.page li{
			border: 1px solid #A6A6A6;
			border-radius:5px;
			text-align: center;
			float:left;
		    margin-left: 30px;
		    line-height: 35px;
		    height: 36px;
		    display: block;
		    cursor: pointer;
		    width: 80px;
		    font-size: 16px;
			
		}
		
		.page a{
			text-decoration: none; 
			color:#009FCD;
		}
		
		.page li:hover{
			background-color:#f5f5f5;

		}
	
		.searchinfo table{
			margin: auto;
			width: 700px;
			border-bottom: 1px solid #A6A6A6;
		}
		
		.searchinfo td:nth-child(1){
			width: 50px;	
			text-align: center;
		}
		.searchinfo td:nth-child(2){
			width: 550px;
			font-size: 16px;
		}	
		.searchinfo a{
			color: #0089B1;
		}
		
		
		
		
	</style>
	
	
</head>

<body>
	<div id="main">
		<?php
			include 'head.php';
		?>
		
  <div class="cart-title">搜索结果</div>
  <div class="cart-content">
    <?php  
			include 'conn.php';
           // $type=$_POST['type'];
		//	$search=$_POST['search'];
            session_start();
        
         $type =$_SESSION['type'];			//创建Session变量保存用户名
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
		<table>
			<tr>
				<td>
					<?php echo $i;?>
				
				
				</td>
				<td>
				<a style="text-decoration: none; " href="qikandetail.php?$id=<?php echo $row['刊名'];?>">『<?php echo str_ireplace($search,"<font color='#FF0000'>".$search."</font>",$row['所属类型']);?>』&nbsp;<?php echo str_ireplace($search,"<font color='#FF0000'>".$search."</font>",$row['刊名']);?>&nbsp;&nbsp;<?php echo str_ireplace($search,"<font color='#FF0000'>".$search."</font>",$row['出版地']);?></a>
				
				</td>
				<td>
					<?php echo (substr($row['添加日期'],0,9)) ;?>
				
				</td>
			
			</tr>
		
		</table>
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
        <li><a href='searchinfo.php'>首页</a></li>
        <li><a href='searchinfo.php?page=<?php echo $ps?>'>上一页</a></li>
        <li><a href='searchinfo.php?page=<?php echo $px?>'>下一页</a></li>
        <li><a href='searchinfo.php?page=<?php echo $page_all_num?>'>尾页</a></li>
      </ul>
    </div>
  </div>
</div>

</body>
</html>
