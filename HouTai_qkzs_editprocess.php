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
	
		$QKBT=$_POST["QKBT"];
		$QKNR=$_POST["QKNR"];
		
		$sql = $conn->query("update qkcontent set  期刊标题='$QKBT', 期刊内容='$QKNR' where qkcontent.id='$ID' ");
		if ($sql){
			echo "<script>alert('修改成功');document.location='HouTai_qkzs.php';</script>";
		}
		else{
			echo "<script>alert('修改失败');history.go(-1);</script>";
		}
	}
	?>
</body>
</html>