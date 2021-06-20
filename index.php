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
<link type="text/css" href="css/index.css" rel="stylesheet"/>
</head>
<script type="text/javascript" src="js/jquery-1.11.0.js"></script><!--调用js-->
<script type="text/javascript" src="js/slideShow.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script><!--/*左边滚动显示图片*/-->
<script type="text/javascript" src="js/backtop.js"></script>
<body>

<div id="all">
 <?php
  include 'head.php';
  include 'conn.php';
  include 'left.php';
  include 'right.php';
  include 'bottom.php';
  ?>
  <?php
	include 'qqonline.php';
	?>
</div>
    <div id="backtop"></div>
</body>
<script type="text/javascript">  /*底部图片滚动播放代码*/
	  speed=20
      td2.innerHTML=td1.innerHTML
      function Marquee(){
      if(td2.offsetWidth-pic.scrollLeft<=0)
      pic.scrollLeft-=td1.offsetWidth
      else{
      pic.scrollLeft++
    }
   }
     var MyMar=setInterval(Marquee,speed)
     pic.onmouseover=function() {clearInterval(MyMar)}
      pic.onmouseout=function() {MyMar=setInterval(Marquee,speed)}	
</script>
	
	<script>
	$(function(){
		$("#aFloatTools_Show").click(function(){
			$('#divFloatToolsView').animate({width:'show',opacity:'show'},100,function(){$('#divFloatToolsView').show();});
			$('#aFloatTools_Show').hide();
			$('#aFloatTools_Hide').show();				
		});
		$("#aFloatTools_Hide").click(function(){
			$('#divFloatToolsView').animate({width:'hide', opacity:'hide'},100,function(){$('#divFloatToolsView').hide();});
			$('#aFloatTools_Show').show();
			$('#aFloatTools_Hide').hide();	
		});
	});
</script>
</html>
