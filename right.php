<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<!--右边模块-->
<div class="right-all">
  <div calss="content-right1">
    <div class="content1">
      <div class="content-top">
        <p class="pp2">教育教学<img src="img/icon-more.gif"  style="float:right; padding-right:15px; display: block; padding-top: 7px; "/></p>
      </div>
		<?php
				$sql="select 刊名,添加日期 from qikan where 所属类型='教育教学' order by '添加日期' desc limit 1,5";
				$res=$conn->query($sql)
				?>
				<table>
					<?php
					while($row=mysqli_fetch_array($res)){
					?>
					<tr>
						<td style="width:180px;"><a href="qikandetail.php?$id=<?php echo $row['刊名'];?>" style="text-decoration: none; text-align: left; color: #000000; font-size: 14px; margin: 0; padding: 0;"><?php echo $row['刊名'];?></a></td>
						<td style="font-size: 14px;" ><?php echo $row['添加日期'];?></td>
					</tr>
					<?php
					}
					?>
				</table>
    </div>
    <div class="content1">
      <div class="content-top">
        <p class="pp2">学报学刊<img src="img/icon-more.gif"  style="float:right; padding-right:15px;  display: block; padding-top: 7px;"/></p>
      </div>
		<?php
				$sql="select 刊名,添加日期 from qikan where 所属类型='学报学刊' order by '添加日期' desc limit 0,5";
				$res=$conn->query($sql)
				?>
				<table>
					<?php
					while($row=mysqli_fetch_array($res)){
					?>
					<tr>
						<td style="width:180px;"><a href="qikandetail.php?$id=<?php echo $row['刊名'];?>" style="text-decoration: none; text-align: left; color: #000000; font-size: 14px; margin: 0; padding: 0;"><?php echo $row['刊名'];?></a></td>
						<td style="font-size: 14px;"><?php echo $row['添加日期'];?></td>
					</tr>
					<?php
					}
					?>
				</table>
    </div>
    <div class="content1">
      <div class="content-top">
        <p class="pp2">社科法制<img src="img/icon-more.gif"  style="float:right; padding-right:15px; display: block; padding-top: 7px;"/></p>
      </div>
		<?php
				$sql="select 刊名,添加日期 from qikan where 所属类型='社科法制' order by '添加日期' desc limit 0,5";
				$res=$conn->query($sql)
				?>
				<table>
					<?php
					while($row=mysqli_fetch_array($res)){
					?>
					<tr>
						<td style="width:180px;"><a href="qikandetail.php?$id=<?php echo $row['刊名'];?>" style="text-decoration: none; text-align: left ; color: #000000; font-size: 14px; margin:25px; padding: 0;"><?php echo $row['刊名'];?></a></td>
						<td style="font-size: 14px;"><?php echo $row['添加日期'];?></td>
					</tr>
					<?php
					}
					?>
				</table>
    </div>
    <div class="content1">
      <div class="content-top">
        <p class="pp2">经济管理<img src="img/icon-more.gif"  style="float:right; padding-right:15px; display: block;  padding-top: 7px;"/></p>
      </div>
		<?php
				$sql="select 刊名,添加日期 from qikan where 所属类型='经济管理' order by '添加日期' desc limit 0,5";
				$res=$conn->query($sql)
				?>
				<table>
					<?php
					while($row=mysqli_fetch_array($res)){
					?>
					<tr>
						<td style="width:180px;"><a href="qikandetail.php?$id=<?php echo $row['刊名'];?>" style="text-decoration: none; text-align: left ; color: #000000; font-size: 14px; margin: 0; padding: 0;"><?php echo $row['刊名'];?></a></td>
						<td style="font-size: 14px;"><?php echo $row['添加日期'];?></td>
					</tr>
					<?php
					}
					?>
				</table>
    </div>
    <div class="content1">
      <div class="content-top">
        <p class="pp2">建筑水利<img src="img/icon-more.gif"  style="float:right; padding-right:15px; display: block;  padding-top: 7px;"/></p>
      </div>
		<?php
				$sql="select 刊名,添加日期 from qikan where 所属类型='建筑水利' order by '添加日期' desc limit 0,5";
				$res=$conn->query($sql)
				?>
				<table>
					<?php
					while($row=mysqli_fetch_array($res)){
					?>
					<tr>
						<td style="width:180px;"><a href="qikandetail.php?$id=<?php echo $row['刊名'];?>" style="text-decoration: none; text-align: left ; color: #000000; font-size: 14px; margin: 0; padding: 0;"><?php echo $row['刊名'];?></a></td>
						<td style="font-size: 14px;"><?php echo $row['添加日期'];?></td>
					</tr>
					<?php
					}
					?>
				</table>
    </div>
    <div class="content1">
      <div class="content-top">
        <p class="pp2">计算机类<img src="img/icon-more.gif"  style="float:right; padding-right:15px; display: block;  padding-top: 7px;"/></p>
      </div>
		<?php
				$sql="select 刊名,添加日期 from qikan where 所属类型='计算机' order by '添加日期' desc limit 0,5";
				$res=$conn->query($sql)
				?>
				<table>
					<?php
					while($row=mysqli_fetch_array($res)){
					?>
					<tr>
						<td style="width:180px;"><a href="qikandetail.php?$id=<?php echo $row['刊名'];?>" style="text-decoration: none; text-align: left ; color: #000000; font-size: 14px; margin: 0; padding: 0;"><?php echo $row['刊名'];?></a></td>
						<td style="font-size: 14px;"><?php echo $row['添加日期'];?></td>
					</tr>
					<?php
					}
					?>
				</table>
    </div>
  </div>
  <img src="img/banner2.jpg" style="width:97%; float:left; margin-bottom: 15px; display: block;  padding-top: 7px; padding-left: 15px;" />
  <div>
    <div class="content1">
      <div class="content-top">
        <p class="pp2">文体传播<img src="img/icon-more.gif"  style="float:right; padding-right:15px; display: block; padding-top: 7px;"/></p>
      </div>
		<?php
				$sql="select 刊名,添加日期 from qikan where 所属类型='文体传播' order by '添加日期' desc limit 0,5";
				$res=$conn->query($sql)
				?>
				<table>
					<?php
					while($row=mysqli_fetch_array($res)){
					?>
					<tr>
						<td style="width:180px;"><a href="qikandetail.php?$id=<?php echo $row['刊名'];?>" style="text-decoration: none; text-align: left ; color: #000000; font-size: 14px; margin: 0; padding: 0;"><?php echo $row['刊名'];?></a></td>
						<td style="font-size: 14px;"><?php echo $row['添加日期'];?></td>
					</tr>
					<?php
					}
					?>
				</table>
    </div>
    <div class="content1">
      <div class="content-top">
        <p class="pp2">医药医学<img src="img/icon-more.gif"  style="float:right; padding-right:15px; display: block;  padding-top: 7px;"/></p>
      </div>
		<?php
				$sql="select 刊名,添加日期 from qikan where 所属类型='医药医学' order by '添加日期' desc limit 0,5";
				$res=$conn->query($sql)
				?>
				<table>
					<?php
					while($row=mysqli_fetch_array($res)){
					?>
					<tr>
						<td style="width:180px;"><a href="qikandetail.php?$id=<?php echo $row['刊名'];?>" style="text-decoration: none; text-align: left ; color: #000000; font-size: 14px; margin: 0; padding: 0;"><?php echo $row['刊名'];?></a></td>
						<td style="font-size: 14px;"><?php echo $row['添加日期'];?></td>
					</tr>
					<?php
					}
					?>
				</table>
    </div>
    <div class="content1">
      <div class="content-top">
        <p class="pp2">农林牧渔<img src="img/icon-more.gif"  style="float:right; padding-right:15px; display: block;  padding-top: 7px;"/></p>
      </div>
		<?php
				$sql="select 刊名,添加日期 from qikan where 所属类型='农林牧渔' order by '添加日期' desc limit 0,5";
				$res=$conn->query($sql)
				?>
				<table>
					<?php
					while($row=mysqli_fetch_array($res)){
					?>
					<tr>
						<td style="width:180px;"><a href="qikandetail.php?$id=<?php echo $row['刊名'];?>" style="text-decoration: none; text-align: left ; color: #000000; font-size: 14px; margin: 0; padding: 0;"><?php echo $row['刊名'];?></a></td>
						<td style="font-size: 14px;"><?php echo $row['添加日期'];?></td>
					</tr>
					<?php
					}
					?>
				</table>
    </div>
  </div>
</div>
<!--右边模块结束-->
</body>
</html>
