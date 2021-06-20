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
				<tr><td><p>留言板</p></td></tr>
		</table>
		
		
		<form name="form1" method="post" action="demo2.php">
		<table id="liuyan_table" align="center">
			
				<font id="tip_font">(*为必填项)</font>
			<tr>
				<td><div align="right"><font color="#ff0000">*</font>标题：</div></td>
				<td colspan="2" align="left"><input type="text" class="input_i1" name="sn" size="40" maxlength="15">
				</td>
			</tr>
			
			<tr>
				<td><div align="right"><font color="#ff0000">*</font>你的姓名：</div></td>
				<td colspan="2" align="left"><input type="text" class="input_i1" name="sn" size="40" maxlength="15">
				</td>
			</tr>
			
			<tr>
				<td><div align="right">电子邮箱：</div></td>
				<td colspan="2" align="left"><input type="text" class="input_i1" name="sn" size="40" maxlength="15">
				</td>
			</tr>
			
			<tr>
				<td><div align="right"><font color="#ff0000">*</font>QQ：</div></td>
				<td colspan="2" align="left"><input type="text" class="input_i1" name="sn" size="40" maxlength="15">
				</td>
			</tr>
			
			<tr>
				<td><div align="right"><font color="#ff0000">*</font>手机：</div></td>
				<td colspan="2" align="left"><input type="text" class="input_i1" name="sn" size="40" maxlength="15">
				</td>
			</tr>
			
			<tr>
				<td><div align="right"><font color="#ff0000">*</font>留言内容：<br>(500字以内)</div></td>
				<td><textarea cols="8" rows="10"></textarea>
				</td>
			</tr>
			
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