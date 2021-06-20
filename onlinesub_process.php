<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<?php
include( "conn.php" );
if ( isset( $_POST[ "mySent" ] ) ) {
  if ( ( substr( $_FILES[ "file" ][ "type" ], 14, 4 ) == "word" ) || ( substr( $_FILES[ "file" ][ "type" ], 46, 4 ) == "word" ) ) {
    $name = $_FILES[ "file" ][ "name" ];
    move_uploaded_file( $_FILES[ "file" ][ "tmp_name" ],"uploadfile/" . iconv( 'utf-8', 'gb2312', $name ) );
    $XM = $_POST[ 'XM' ];
    $TGLX = $_POST[ 'TGLX' ];
    $SZDW = $_POST[ 'SZDW' ];
    $SZKS = $_POST[ 'SZKS' ];
    $ZC = $_POST[ 'ZC' ];
    $TXDZ = $_POST[ 'TXDZ' ];
    $YZBM = $_POST[ 'YZBM' ];
    $LXDH = $_POST[ 'LXDH' ];
    $QQ = $_POST[ 'QQ' ];
    $DZYX = $_POST[ 'DZYX' ];
    $WZBT = $_POST[ 'WZBT' ];
    $FBT = $_POST[ 'FBT' ];
    $file = $_FILES[ "file" ][ "name" ];
    if ( $XM == '' ) {
      echo "<script>alert('姓名不能为空！');
							history.back(-1);</script>";
    } else if ( $TGLX == '' ) {
      echo "<script>alert('投稿类型不能为空！');
							history.back(-1);</script>";
    } else if ( $SZDW == '' ) {
      echo "<script>alert('所在单位不能为空！');
							history.back(-1);</script>";
    } else if ( $TXDZ == '' ) {
      echo "<script>alert('通讯地址不能为空！');
							history.back(-1);</script>";
    } else if ( $LXDH == '' ) {
      echo "<script>alert('联系电话不能为空！');
							history.back(-1);</script>";
    } else if ( $file == '' ) {
      echo "<script>alert('上传文章不能为空！');
							history.back(-1);</script>";
    } else {
      $result = $conn->query( "INSERT INTO onlinesub (姓名,投稿类型,所在单位,所在科室,职称,通讯地址,邮政编码,联系电话,QQ,电子邮箱,文章标题,副标题,上传文章) VALUES ('$XM','$TGLX','$SZDW','$SZKS','$ZC','$TXDZ','$YZBM','$LXDH','$QQ','$DZYX','$WZBT','$FBT','$file')" );
      if ( $result ) {
        echo "<script>alert('投稿成功');document.location='index.php';</script>";
      }
    }
  } else {
    echo "<script>alert('只能上传.doc文档,上传文件失败');history.back(-1);</script>";
  }
}

?>
</body>
</html>