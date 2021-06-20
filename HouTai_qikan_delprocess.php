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
		
		$sql = $conn->query("DELETE FROM `qikan` where qikan.id='$ID' ");
		if ($sql){
			echo "<script>alert('删除成功');document.location='HouTai_qikan.php';</script>";
		}
		else{
			echo "<script>alert('删除失败');history.go(-1);</script>";
		}
	}
	?>
</body>
</html>