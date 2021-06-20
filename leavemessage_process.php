<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<?php
include( "conn.php" );
if ( isset( $_POST[ "mySent" ] ) ) {

    $BT = $_POST[ 'BT' ];
    $XM = $_POST[ 'XM' ];
    $DZYX = $_POST[ 'DZYX' ];
    $QQ = $_POST[ 'QQ' ];
    $SJH = $_POST[ 'SJH' ];
    $LYNR = $_POST[ 'LYNR' ];
    if ( $XM == '' ) {
      echo "<script>alert('姓名不能为空！');
							history.back(-1);</script>";
    } 
   else {
      $result = $conn->query( "INSERT INTO leavemessage (标题,姓名,电子邮箱,QQ,手机号,内容) VALUES ('$BT','$XM ','$DZYX','$QQ','$SJH','$LYNR')" );
      if ( $result ) {
        echo "<script>alert('投稿成功');document.location='index.php';</script>";
      }
	   else{
		 echo "<script>alert('投稿失败');document.location='leavemessage.php';</script>";  
	   }
    }
 
}

?>
</body>
</html>