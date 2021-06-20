<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
	<link type="text/css" rel="stylesheet" href="style.css">

  <script type="text/javascript" src="js/jquery-1.11.0.js"></script>
      <script type="text/javascript" src="js/scroll.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/slideShow.js"></script>
<body>
	<div id="main">
		<?php
			include 'conn.php';
		?>
		<?php
			include 'head.php';
		?>
		
			
		
		<table id="liuyan">
				<tr><td><p>在线投稿</p></td></tr>
		</table>
		
		
		<form name="form1" method="post" action="demo2.php">
		<table id="liuyan_table" align="center">
			
				<font id="tip_font" style="left: 320px">(*为必填项)</font>
			<tr>
				<td><div align="right"><font color="#ff0000">*</font>姓名：</div></td>
				<td colspan="2" align="left"><input type="text" class="input_i1" name="sn" size="40" maxlength="6">
				</td>
			</tr>
			
			<tr>
				<td><div align="right"><font color="#ff0000">*</font>投稿类型：</div></td>
				<td><div class="option_two">
					<!--<form action="keyword.php" method="post" enctype="multipart/form-data">-->
			<select title="" >
			<option value="教育教学">-教育教学-</option>
						<option value="计算机" selected>-计算机类-</option>
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
		</div></td>
			</tr>
			
			<tr>
				<td><div align="right">所在单位：</div></td>
				<td colspan="2" align="left"><input type="text" class="input_i1" name="sn" size="40" maxlength="15">
				</td>
			</tr>
			
			<tr>
				<td><div align="right">昵称：</div></td>
				<td colspan="2" align="left"><input type="text" class="input_i1" name="sn" size="40" maxlength="10">
				</td>
			</tr>
			
			<tr>
				<td><div align="right"><font color="#ff0000">*</font>通讯地址：</div></td>
				<td colspan="2" align="left"><input type="text" class="input_i1" name="sn" size="40" maxlength="15">
				</td>
			</tr>
			
			<tr>
				<td><div align="right">邮政编码：</div></td>
				<td colspan="2" align="left"><input type="text" class="input_i1" name="sn" size="40" maxlength="5">
				</td>
			</tr>
			
			<tr>
				<td><div align="right"><font color="#ff0000">*</font>联系电话：</div></td>
				<td colspan="2" align="left"><input type="text" class="input_i1" name="sn" size="40" maxlength="11">
				</td>
			</tr>
			
			<tr>
				<td><div align="right">QQ：</div></td>
				<td colspan="2" align="left"><input type="text" class="input_i1" name="sn" size="40" maxlength="15">
				</td>
			</tr>
			
			<tr>
				<td><div align="right">E-mail：</div></td>
				<td colspan="2" align="left"><input type="text" class="input_i1" name="sn" size="40" maxlength="15">
				</td>
			</tr>
			
			<tr>
				<td><div align="right">文章标题：</div></td>
				<td colspan="2" align="left"><input type="text" class="input_i1" name="sn" size="40" maxlength="15">
				</td>
			</tr>
			
			<tr>
				<td><div align="right">副标题：</div></td>
				<td colspan="2" align="left"><input type="text" class="input_i1" name="sn" size="40" maxlength="15">
				</td>
			</tr>
			
			<tr>
				<td><div align="right"><font color="#ff0000">*</font>上传文章：</div></td>
				<td><form enctype="multipart/form-data" method="post">
				<input type="file" name="file" />
			</form></td>
				
			</tr>
			<font id="tip_font" style="top: 425px;left: 190px">只能上传word文件</font>
			<tr>
				<td></td>
				<td><input type="submit" class="buttom_one" value="提交" name="submit"/>
				<a href="index.php"><input type="button" class="buttom_two" value="返回" align="right"/></a></td>
			</tr>
		</table>

	</form>
		
		
	</div>	
		<?php
			include 'bottom.php';
		?>	
	
	
</body>
</html>