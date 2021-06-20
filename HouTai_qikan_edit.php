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
  session_start();
  include 'conn.php';
  include 'HouTai_head.php';
  include 'HouTai_left.php';
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
    <div class="qikan_edit_head">
        <tr>
          <td><a href="HouTai.php" style="text-decoration: none;  color: #E8ECEF; padding-left: 40px;">期刊管理>></a></td>
          <td><a href="" style="text-decoration: none;  color: #E8ECEF;"><?php echo $row['所属类型'];?>类期刊>></a></td>
          <td><?php echo $row['刊名'];?></td>
        </tr>
    </div>
	  <div class="info-all">
		  <div class="info-content">
			  <form method="post" action="HouTai_qikan_editprocess.php" enctype="multipart/form-data">
				  <table border="1px" height="500" width="93.8%" cellspacing="0" float"left" bordercolor=" #E8ECEF">
					  <tr>
						 <th>ID：</th>
						  <td><input class="common-text" name="ID" size="30" value="<?php echo $row['id'];?>" type="text"></td>
					  </tr>
					 <tr>
						 <th>刊名：</th>
						  <td><input class="common-text" name="KM" size="30" value="<?php echo $row['刊名'];?>" type="text"></td>
					  </tr>
					  <tr>
						 <th>主办：</th>
						  <td><input class="common-text" name="ZB" size="30" value="<?php echo $row['主办'];?>" type="text"></td>
					  </tr>
					  <tr>
						 <th>周期：</th>
						  <td><input class="common-text" name="ZQ" size="30" value="<?php echo $row['周期'];?>" type="text"></td>
					  </tr>
					  <tr>
						 <th>出版地：</th>
						  <td><input class="common-text" name="CBD" size="30" value="<?php echo $row['出版地'];?>" type="text"></td>
					  </tr>
					  <tr>
						 <th>语种：</th>
						  <td><input class="common-text" name="YZ" size="30" value="<?php echo $row['语种'];?>" type="text"></td>
					  </tr>
					  <tr>
						 <th>开本：</th>
						  <td><input class="common-text" name="KB" size="30" value="<?php echo $row['开本'];?>" type="text"></td>
					  </tr>
					  <tr>
						 <th>ISSN：</th>
						  <td><input class="common-text" name="ISSN" size="30" value="<?php echo $row['ISSN'];?>" type="text"></td>
					  </tr>
					  <tr>
						 <th>CN：</th>
						  <td><input class="common-text" name="CN" size="30" value="<?php echo $row['CN'];?>" type="text"></td>
					  </tr>
					  <tr>
						 <th>邮发代号：</th>
						  <td><input class="common-text" name="YFDH" size="30" value="<?php echo $row['邮发代号'];?>" type="text"></td>
					  </tr>
					  <tr>
						 <th>复合影响因子：</th>
						  <td><input class="common-text" name="FHYXYZ" size="30" value="<?php echo $row['复合影响因子'];?>" type="text"></td>
					  </tr>
					  <tr>
						 <th>综合影响因子：</th>
						  <td><input class="common-text" name="ZHYXYZ" size="30" value="<?php echo $row['综合影响因子'];?>" type="text"></td>
					  </tr>
				<tr>
                    <th>所属类型：</th>
                    <td><select name="SULX" class="cs-select"  >
						<option value="<?php echo $row['所属类型'];?>" selected>-<?php echo $row['所属类型'];?>-</option>
                       <option value="教育教学">-教育教学-</option>
                       <option value="计算机类" >-计算机类-</option>
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
					</td>
                  </tr>
					  <tr>
						 <th>添加日期：</th>
						  <td><input class="common-text" name="TJRQ" size="30" value="<?php echo $row['添加日期'];?>" type="text"></td>
					  </tr>
					 <tr>
						 <th>图片URL：</th>
						  <td><input class="common-text" name="TPURL" size="30" value="<?php echo $row['图片URL'];?>" type="text"></td>
					  </tr>
					  <tr>
						 <th>期刊简介：</th>
						  <td><script id="container" name="QKJJ" type="text/plain">
						  <?php echo $row['期刊简介']?>
							  </script></td>
					  </tr>
					  <tr>
                    <th></th>
                    <td ><input class="btn btn-primary" value="提交" type="submit" name="mySent" id="btn-center" >
                      <input class="btn" onclick="history.go(-1)" value="返回" type="button"></td>
                  </tr>
				  </table>
			  </form>
		  </div>
	  </div>
<!--配置文件-->
	  <script type="text/javascript" src="edit/ueditor/ueditor.config.js"></script>
<!--编辑器源码文件-->
	  <script type="text/javascript" src="edit/ueditor/ueditor.all.js"></script>
	  <script type="text/javascript" src="edit/ueditor/third-party/jquery-1.10.2.min.js"></script>
	  <!--实例化编辑器-->
	  <script type="text/javascript">
		  var ue = UE.getEditor("container");
	  </script>
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