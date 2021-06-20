<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
	<link type="text/css" href="css/index.css" rel="stylesheet"/>
	<link type="text/css" href="css/onlinesub.css" rel="stylesheet"/>
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
      <div class="cart-title">在线投稿</div>
      <div class="cart-content">
      <div class="cart-form">
        <form method="post" action="onlinesub_process.php" enctype="multipart/form-data" >
              <table class="insert-tab" width="100%">
                <tbody>
                  <tr>
                    <th><i class="require-red">*</i>姓名：</th>
                    <td><input class="common-text" id="title" name="XM" size="50" value="" type="text"></td>
                  </tr>
                  <tr>
                    <th><i class="require-red">*</i>投稿类型：</th>
                    <td><select name="TGLX" class="cs-select">
                       <option value="教育教学">-教育教学-</option>
                       <option value="计算机类" selected>-计算机类-</option>
                       <option value="经济管理">-经济管理-</option>
                       <option value="电子通信">-电子通信-</option>
                       <option value="建筑水利">-建筑水利-</option>
                       <option value="学报学刊">-学报学刊-</option>
                       <option value="农林牧渔">-农林牧渔-</option>
                       <option value="医药医学">-医药医学-</option>
                       <option value="文体传播">-文体传播-</option>
                       <option value="社科法制">-社科法制-</option>
                       <option value="综合分类">-综合分类-</option>
                      </select></td>
                  </tr>
                  <tr>
                    <th><i class="require-red">*</i>所在单位：</th>
                    <td><input class="common-text" name="SZDW" size="50" type="text"></td>
                  </tr>
                   <tr>
                    <th>所在科室：</th>
                    <td><input class="common-text" name="SZKS" size="50" value="" type="text"></td>
                  </tr>
                  <tr>
                    <th>职称：</th>
                    <td><input class="common-text" name="ZC" size="50" value="" type="text"></td>
                  </tr>
                  <tr>
                    <th><i class="require-red">*</i>通讯地址：</th>
                    <td><input class="common-text" name="TXDZ" size="50" value="" type="text"></td>
                  </tr>
                  <tr>
                    <th>邮政编码：</th>
                    <td><input class="common-text" name="YZBM" size="50" value="" type="text"></td>
                  </tr>
                  <tr>
                    <th><i class="require-red">*</i>联系电话：</th>
                    <td><input class="common-text" name="LXDH" size="50" value="" type="text"></td>
                  </tr>
                  <tr>
                    <th>QQ：</th>
                    <td><input class="common-text" name="QQ" size="50" value="" type="text"></td>
                  </tr>
                  <tr>
                    <th>E-mail：</th>
                    <td><input class="common-text" name="DZYX" size="50" value="" type="text"></td>
                  </tr>
                  <tr>
                    <th>文章标题：</th>
                    <td><input class="common-text" name="WZBT" size="50" value="" type="text"></td>
                  </tr>
                  <tr>
                    <th>副标题：</th>
                    <td><input class="common-text" name="FBT" size="50" value="" type="text"></td>
                  </tr>
                   <tr>
                    <th ><i class="require-red">*</i>上传文章：</br>
                    <i class="require-red" >只能上传word文档</i></th>
                    <td> <input type="file" name="file"size="20" id="file" /></td>
                      <!--<input type="submit" onclick="submitForm('/jscss/admin/design/upload')" value="上传图片"/>--></td>
                  </tr>
                  <tr>
                    <th></th>
                    <td ><input class="btn btn-primary" value="提交" type="submit" name="mySent" id="btn-center" >
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