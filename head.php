<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<script type="text/javascript" src="js/jquery-1.11.0.js"></script><!--调用js-->
<script type="text/javascript" src="js/scroll.js"></script><!--调用js滚动显示文字-->
<body>
<div id="header1">
  <div id="logo"><img src="img/logo.png"/></div>
  <div id="quote">
    <div class="quote-1"> <img  src="img/dingye.png" />
      <div class="quote-1-text">
        <p><b>本站微店</b></p>
        <p>扫一扫打开</p>
      </div>
    </div>
    <div class="quote-1"> <img  src="img/dingye.png" />
      <div class="quote-1-text">
        <p><b>微信号</b></p>
        <p>扫一扫添加</p>
      </div>
    </div>
    <div class="quote-1"> <img  src="img/dingye.png" />
      <div class="quote-1-text">
        <p><b>微信公众号</b></p>
        <p>扫一扫订阅</p>
      </div>
    </div>
  </div>
</div>
<div id="menu">
  <div id="menu-content"> <a href="index.php">网站首页</a> <a href="#">期刊分类</a> <a href="#">发表流程</a> <a href="qikanzhishi.php">期刊知识</a> <a href="#">职称知识</a> <a href="CGAL.php">成功案例</a> <a href="#">网站简介</a> </div>
</div>
<div id="third-search">
  <form action="keyword.php" method="post" enctype="multipart/form-data">
    <select id="select" name="type">
      <option value="教育教学">-教育教学-</option>
      <option value="计算机">-计算机类-</option>
      <option value="经济管理">-经济管理-</option>
      <option value="电子通信">-电子通信-</option>
      <option value="建筑水利">-建筑水利-</option>
      <option value="学报学刊">-学报学刊-</option>
      <option value="农林牧渔">-农林牧渔-</option>
      <option value="医药医学">-医药医学-</option>
      <option value="文体传播">-文体传播-</option>
      <option value="社科法制">-社科法制-</option>
      <option value="综合分类">-综合分类-</option>
    </select>
    <div class="search">
      <input name="search" type="text"  class="search_text" id="search-keyword" value="搜索..." onfocus="if(this.value=='搜索...'){this.value='';}" onblur="if(this.value==''){this.value='搜索...';}"/>
      <div class="nav_btn">
        <input type="submit" name="submit" value="" />
      </div>
    </div>
  </form>
  <div id="scroll">
    <div class="news-pic"></div>
    <ul>
      <li>公告1：论文期刊在线全新改版上线，欢迎咨询！</li>
      <li>公告2：请用微信扫描网站右上角二维码了解更多信息！</li>
      <li>公告3：您如有稿件可以在线提交，我们将为您提供免费咨询服务！</li>
    </ul>
  </div>
</div>
<!-- 头部模块结束 -->
</body>
</html>
