<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
	<?php
	include("conn.php");
	if(isset($_POST["mySent"])){
		/*move_uploaded_file($_FILES["file"]["tmp_name"],"uploaded".$_FILES["file"]["name"]);*/
		$ID=$_POST['ID'];
		$KM=$_POST["KM"];
		$ZB=$_POST["ZB"];
		$ZQ=$_POST["ZQ"];
		$CBD=$_POST["CBD"];
		$YZ=$_POST["YZ"];
		$KB=$_POST["KB"];
		$ISSN=$_POST["ISSN"];
		$CN=$_POST["CN"];
		$YFDH=$_POST["YFDH"];
		$FHYXYZ=$_POST["FHYXYZ"];
		$ZHYXYZ=$_POST["ZHYXYZ"];
		$SULX=$_POST["SULX"];
		$TJRQ=$_POST["TJRQ"];
		$TPURL=$_POST["TPURL"];
		$QKJJ=$_POST["content"];
		
		$sql = $conn->query("update qikan set 刊名='$KM' , 主办='$ZB', 周期='$ZQ', 出版地='$CBD', 语种='$YZ', 开本='$KB', ISSN='$ISSN', CN='$CN', 邮发代号='$YFDH', 复合影响因子='$FHYXYZ', 综合影响因子='$ZHYXYZ', 所属类型='$SULX', 添加日期='$TJRQ', 图片URL='$TPURL', 期刊简介='$QKJJ' where qikan.id='$ID' ");
		if ($sql){
			echo "<script>alert('修改成功');document.location='HouTai_qikan.php';</script>";
		}
		else{
			echo "<script>alert('修改失败');history.go(-1);</script>";
		}
	}
	?>
</body>
</html>