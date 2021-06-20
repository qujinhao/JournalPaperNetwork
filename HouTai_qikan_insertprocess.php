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
		
		$sql = $conn->query("INSERT INTO `qikan`(`id`, `刊名`, `主办`, `周期`, `出版地`, `语种`, `开本`, `ISSN`, `CN`, `邮发代号`, `复合影响因子`, `综合影响因子`, `所属类型`, `添加日期`, `图片URL`, `期刊简介`) VALUES (NULL,'$KM','$ZB','$ZQ','$CBD','$YZ','$KB','$ISSN','$CN','$YFDH','$FHYXYZ','$ZHYXYZ','$SULX','$TJRQ','$TPURL','$QKJJ')");
		
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