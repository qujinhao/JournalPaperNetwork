<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
	<?php
include "conn.php";
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$pwd=md5($_POST['pwd']);
		$query = "SELECT COUNT(用户名) FROM admin WHERE 用户名=?";
		$stmt = $conn->prepare($query);
		$stmt->bind_param("s",$inname);
		$inname = $name;
		$stmt->execute();
		$stmt->store_result();
		$stmt->bind_result($num);
		while($stmt->fetch()){
			if($num<1){
				echo "该用户没有注册";
				
				
			}
			else{
				$stmt = $conn->prepare("SELECT 密码 FROM admin WHERE 用户名=?");
				$stmt->bind_param("s",$iname);
				$iname = $name;
				$stmt->execute();
				$stmt->store_result();
				$stmt->bind_result($pas);
				$stmt->fetch();
				if($pas==$pwd){
					session_start();
					$_SESSION['name']= $name;
					$_SESSION['pwd'] = $pwd;
					header("Location:HouTai.php");
				}
				else{
					echo "密码有误!";
					
				}
			}
		}
		$stmt->close();
		$myspli->close();
	}

?>
</body>
</html>