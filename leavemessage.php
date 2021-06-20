<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
	<link type="text/css" href="css/index.css" rel="stylesheet"/>
	<link type="text/css" href="css/leavemessage.css" rel="stylesheet"/>
</head>
<script type="text/javascript" src="js/jquery-1.11.0.js"></script><!--调用js-->
<script type="text/javascript" src="js/slideShow.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script><!--/*左边滚动显示图片*/-->
<script type="text/javascript" src="js/scroll.js"></script><!--调用js滚动显示文字-->
<body>
<div id="all">
<?php
  include 'conn.php'; 
  include 'head.php';
?>
		<div class="container">
      <div class="cart-title">留言板</div>
      <div class="cart-content">
      <div class="cart-form">
        <form method="post" action="leavemessage_process.php" enctype="multipart/form-data" >
              <table class="insert-tab" width="100%">
                <tbody>
                  <tr>
                    <th><i class="require-red">*</i>标题：</th>
                    <td><input class="common-text" id="title" name="BT" size="50" value="" type="text"></td>
                  </tr>
                  <tr>
                    <th><i class="require-red">*</i>你的姓名：</th>
                    <td><input class="common-text" name="XM" size="50" type="text"></td>
                  </tr>
                   <tr>
                    <th>电子邮箱：</th>
                    <td><input class="common-text" name="DZYX" size="50" value="" type="text"></td>
                  </tr>
                  <tr>
                    <th><i class="require-red">*</i>QQ：</th>
                    <td><input class="common-text" name="QQ" size="50" value="" type="text"></td>
                  </tr>
                  <tr>
                    <th><i class="require-red">*</i>手机号：</th>
                    <td><input class="common-text" name="SJH" size="50" value="" type="text"></td>
                  </tr>
                   <tr>
                    <th ><i class="require-red">*</i>留言内容：</br>
                    <i class="require-red" >（500字以内）</i></th>
                    <td><input class="common-text" name="LYNR" size="50" value="" type="text" style=" height: 100px;"></td>
                      <!--<input type="submit" onclick="submitForm('/jscss/admin/design/upload')" value="上传图片"/>--></td>
                  </tr>
                  <tr>
                    <th></th>
                    <td ><input class="btn btn-primary" value="提交" type="submit" name="mySent" id="btn-center" style="margin-left: 100px;">
                      <input class="btn" onclick="history.go(-1)" value="返回" type="button"></td>
                  </tr>
                </tbody>
              </table>
            </form>

        </div>
      </div>
    </div>
<?php
            include 'qikandetail_bottom.php';
?>
</div>
</body>
</html>