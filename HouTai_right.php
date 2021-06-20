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
	  <div class="right-all">
    <div class="right-head">
      <tr>
        <td><a href="HouTai.php" style="padding-left: 10px; text-decoration: none; color: black;" >首页</a></td>
        <td><a href="HouTai_qikan.php" style="text-decoration: none; color: black;">>>期刊管理</a></td>
      </tr>
    </div>
    <div class="search-all">
      <p><a href="HouTai_qikan_insert.php" style="text-decoration: none;">新增期刊</a></p>
      <form action="HouTai_keyword.php" method="post" enctype="multipart/form-data">
        <select id="select" name="type">
          <option value="教育教学">-教育教学-</option>
          <option value="计算机">-计算机类-</option>
          <option value="经济管理">-经济管理-</option>
          <option value="电子通信">-电子通信-</option>
          <option value="建筑水利">-建筑水利-</option>
          <option value="学报学刊">-学报学刊-</option>
          <option value="农林牧渔">-农林牧渔-</option>
          <option value="医药医学">-医药医学-</option>
          <option value="文体传播">-文体传播-</option>
          <option value="社科法制">-社科法制-</option>
          <option value="综合分类">-综合分类-</option>
        </select>
        <div class="search">
          <input name="search" type="text"  class="search_text" id="search-keyword" value="搜索..." onfocus="if(this.value=='搜索...'){this.value='';}" onblur="if(this.value==''){this.value='搜索...';}"/>
          <div class="nav_btn">
            <input type="submit" name="submit" value="" />
          </div>
        </div>
      </form>
    </div>
    <div class="right-content">
      <table border="1px" height="500" width="950" cellspacing="0" float"left" bordercolor=" #E8ECEF">
        <tr>
          <td style=" width: 500px; ">刊名</td>
          <td style=" width: 200px; ">所属类型</td>
          <td style=" width: 100px; ">添加日期</td>
          <td style=" width: 100px; ">操作</td>
        </tr>
     <?php
        include( "conn.php" );
        $sql = "select id,刊名,所属类型,添加日期 from qikan";
        $res = $conn->query( $sql );
		$all_num=mysqli_num_rows($res); //总条数
			$page_num=9; //每页条数
            $page_all_num = ceil($all_num/$page_num); //总页数
            $page=empty($_GET['page'])?1:$_GET['page']; //当前页数
	        $page=(int)$page; //安全强制转换
	        $limit_st = ($page-1)*$page_num; //起始数//
			
			
			
			$sql = "select id,刊名,所属类型,添加日期 from qikan limit $limit_st,$page_num";
			$res=$conn->query($sql);
      while($row=mysqli_fetch_array($res)){  
	  ?>
        <tr bgcolor="white">
          <td><?php echo $row['刊名'];?><input type="hidden" name="id" value="<?php echo $row['id']; ?>">
			</td>
          <td><?php echo $row['所属类型'];?></td>
		  <td><?php echo $row['添加日期'];?></td>
		  <td><a href="HouTai_qikan_edit.php?$id=<?php echo $row['刊名'];?>" style="text-decoration: none;">编辑</a>&nbsp;&nbsp;&nbsp;<a href="HouTai_qikan_del.php?$id=<?php echo $row['刊名'];?>" style="text-decoration: none;">删除</a></td>
        </tr>
        <?php
			}
		   $px = $page>=$page_all_num ? $page_all_num : $page+1 ;  //下一页
	    	     $ps = $page<=1 ? 1 : $page-1 ;  //上一页
		  ?>
      </table>
    </div>
	 <div class="page1">
		 <tr>
			 <td><a href='HouTai_qikan.php' style="text-decoration: none;  color:black;">首页</a></td>
			 <td><a href='HouTai_qikan.php?page=<?php echo $ps;?>' style="text-decoration: none;  color:black;">上一页</a></td>
			 <td><a href='HouTai_qikan.php?page=<?php echo $px;?>' style="text-decoration: none;  color:black;">下一页</a></td>
			 <td><a href='HouTai_qikan.php?page=<?php echo $page_all_num;?>' style="text-decoration: none;  color:black;">尾页</a></td>
		 </tr>
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