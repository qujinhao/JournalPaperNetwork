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
	
		$TPURL=$_POST["TPURL"];
		
		$sql = $conn->query("update casesucess set  图片URL='$TPURL' where casesucess.id='$ID' ");
		if ($sql){
			echo "<script>alert('修改成功');document.location='HouTai_cgal.php';</script>";
		}
		else{
			echo "<script>alert('修改失败');history.go(-1);</script>";
		}
	}
	?>
</body>
</html>