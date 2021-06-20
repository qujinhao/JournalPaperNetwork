<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
	<style type="text/css">
	/*总页面布局*/
	#main{
		width: 1050px;
		height: 1300px;
		padding: 0;
		margin: 0;
		margin-right: auto;
		margin-left: auto;
		
/*		border: 1px solid red;*/
/*		background-color: #F9F9F9;*/
	}
		
	/*	顶部logo及其二维码布局*/
	#head_logo{
		padding: 10px;
		background-color:#F5F5F5;
		height: 110px;
	}
	
	#logo{
		float: left;
		padding-top: 20px;	
		}
		
	/*	顶部二维码布局*/
	.qr_code{
		padding-top: 10px;
		float: left;
		position: relative;
		left: 170px;
	}
	
	/*	顶部二维码文字布局*/
	.qr_text{
		margin: 10px;
		float: left;
		position: relative;
		left: 170px;	
	}
		
	/*	顶部导航栏*/
	.nav{
	   list-style: none;
	   background-color: #01ADDF;
	   overflow: hidden;
	   margin: 0;
	   border-bottom: 5px solid #f6b12e;

	  }

	.nav li{
	   float:left;
	   margin-left: 30px;
	   line-height: 45px;
	   height: 45px;
	   display: block;
	   cursor: pointer;
	   padding: 0 20px;
	   font-size: 16px;
}

	.nav a{
	   text-decoration: none; 
	   color: white;
	   font-weight: bold;
}

	.nav li:hover{
		background-color:#009FCD;

}
	
	/*	顶部搜索栏	*/
	.option{
			width: 100px;
			height: 20px;
			float: left;
            margin:2px 2px;
		}
		
	/*	导航菜单	*/
	#top_select{
			
			border: 1px solid #A6A6A6;
			height: 40px;
			margin-top: 10px;
		}
		
	/*	导航菜单边框设计	*/
	.option select{
		outline: none;
		width: 90%;
		height: 35px;
		line-height: 35px;
		border-radius: 5px;
		border-color:#CCCCCC;
		 
		
	}	
	
	/*	搜索栏边框及其字体*/
	#search_text{
		border-radius: 5px;
		border: 1px solid #A6A6A6;
		width: 150px;
		height: 31px;
		float: left;
		font-size: 14px;
		border: 1px solid #CCCCCC;
		margin:2px 2px;
		position: relative;
		right: 10px;
	}

	/*	搜索图标*/
	#search_img{
		position: relative;
		right: 43px;
		top: 8px;
		float:left;
	}
	
	/*	公告图标*/
	.news-pic{
		background-image:url(img/icon-news.gif);
		background-repeat:no-repeat;
		float:left;
		height:28px;
		width:20px;
		background-position:center;
	}
		
	/*	公告内文字滚动*/
	#scroll{
		margin-left:10px;
		margin-top:5px;
		width:600px;
		height:30px;
		float:left;
		overflow:hidden;
		line-height:30px;
		color:red;
		}
	
	/*	公告li格式修改*/
	#scroll ul{
		list-style-type:none;
		margin:0;	
		} 
		
	/*  新闻内容滚动*/
	.slideShow{
		width: 220px;
		height: 250px;
		border: 1px #eeeeee solid;
		margin: 10px auto;
		position: relative;
		overflow: hidden;
		float: left;
	}

	.slideShow ul{
			margin: 0;
			padding: 0px;
			position: relative;
			width: 1000px;
		}    

	.slideShow ul li{
		float: left;
		width: 220px;
		list-style-type: none;
		cursor: pointer;
	}
	
	/*	索引内容设计*/
	.showNav{
		position: absolute;
		right: 10px;
		bottom: 5px;
		text-align: center;
		font-size: 12px;
		line-height: 20px;
	}

	.showNav span{
		cursor: pointer;
		display: block;
		float: left;
		width: 20px;
		height: 20px;
		background: #ffa720;
		margin-left: 2px;
		color: #fff;	
	}

	.showNav .active{
		background: #fb8229;
	}	

	/*	联系版块*/
	.contact_info{
		background-color: #f5f5f5;
		position: relative;
		top:-20px;
		height: 30px;
		
	}	
	
	#mask {
		content: "";
		position: absolute;
		bottom:-5px;
		width:40%;
		height: 4px;
		background: #01ADDF;
		
	}
	
	/*	联系版块按钮*/
	#but_one{
		cursor: pointer;
		display: block;
		float: left;
		width: 93px;
		height: 25px;
		margin-left: 2px;
		color: #fff;	
		text-align: center;
		border-radius: 5px;
		padding-top: 5px;
		background: #FFB038;
		margin: 10px;
		font-size: 14px;
	}

	#but_one:hover{
		background: #ffa720;
	}

	.rihgt_ad p{
		background-color: #f5f5f5; 
		padding:5px 0px 5px 10px;
		margin-left: 10px;
		width: 250px;
		border: 4px solid  #01ADDF;
		border-top:none;
		border-bottom:none;
		border-right:none;
		float: left;
		margin: 0;
	}
		
	.ad_img{
		position: relative;
		left: 130px;

	}	
	
	#contact_info_ul{
		list-style-type: none;
		padding: 0px;
		margin: 0px;
		padding-left: 10px;
		font-size: 15px;
	}	
			
	#commandation_info_ul{
		list-style-type: none;
		padding: 0px;
		margin: 0px;
		padding-left: 10px;
		font-size: 15px;
		border: 1px solid red;
		border-collapse: collapse;
	}
		
	#commandation_info_ul li{
		border: 1px solid red;
		border-collapse: collapse;


	}
		
	.contact_info table{
		border-collapse:collapse;
		border: 1px solid red;
		}
		
	.contact_info td{
		border:solid 2px #f5f5f5;
		width: 50px;
		padding-top: 4px;
		padding-left: 10px;
		border-collapse:collapse;
		}
		
	.contact_info a{
		text-decoration: none; 
	  	color: #686868;
	}
		
	.contact_info a:hover{
		text-decoration:underline;
	  	color: #686868;
	}
		
	.ad_logo{
		border: 1px solid #f5f5f5;
		height: 200px;
		float: left;
		margin:10px 4px 5px 1px;
	}	
	
	.ad_logo a{
		text-decoration: none; 
	  	color: #686868;
		font-size: 15px;
		
	}
	
	.ad_logo td:nth-child(1){
		width: 170px;
	  	color: #686868;
		
		
	}
	
	.ad_logo td:nth-child(2){
	  	color: #686868;
		font-size: 14px;
	}
	
	.ad_logo a:hover{
		text-decoration:underline;
	  	color: #686868;
	}
		
	#mask_to {
		content: "";
		position: absolute;
		bottom:-115px;
		width:5%;
		height:4px;
		background: #01ADDF;
		
		
	}	
	
	.bottom{	
		height: 130px;
		width: 1895px;
		background: #32383C;
		
	}
	
	.bottom ul{
		margin: 0px;
		padding: 0px;
		
	}
		
	.bottom li{
		float: left;
		display: inline;
		list-style-type: none;
		margin-top: 5px;
		margin-right: 15px;
		
		
	}
	
	.bottom a{
		color: white;
		font-size: 15px;
		text-decoration: none; 
	}
	
	.bottom a:hover{
		text-decoration:underline;
	}
	
	.about{
		width: 250px;
		height: 100px;	
		float: left;
		margin-left:390px; 
		margin-top: 20px;
	
	}
	
	.link{
		float: left;
		width: 370px;
		height: 100px;	
		margin-left:70px; 
		margin-top: 20px;
	}
	
	.partner{
		float:left;
		width: 400px;
		height: 100px;
		margin-left:70px; 
		margin-top: 20px;
	}
	
	.title{
		color: white;
		font-size: 16px;
		padding-bottom: 10px;
	}

	.footer{
		text-align: center;
		padding: 10px;
		background: #272c2f;
		color: white;
		font-size: 15px;
		width: 1875px;
	}	
	
	.ad_style{
		width: 820px;
		float: right;
		height: 755px;
	}	
</style>
		
<!--	script文件，负责完成信息滚动-->
	  <script type="text/javascript" src="js/jquery-1.11.0.js"></script>
      <script type="text/javascript" src="js/scroll.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/slideShow.js"></script>

	
	
	
<body>
	
	<div id="main">
		<?php
			include 'conn.php';
		?>
	<!--头部logo部分-->
		<div id="head_logo">
			<img src="img/logo.png" height="65" id="logo"/>
			<img src="img/dingye.png" class="qr_code" height="90" width="90" />
				<div class="qr_text">
				<p><b>微信公众号</b></p>
				<p><span>扫一扫订阅</span></p>
				</div>
				
				<img src="img/weichat.png" class="qr_code" height="90" width="90"/>
				<div class="qr_text">
				<p><b>微信号</b></p>
				<p><span>扫一扫添加</span></p>
				</div>
				
				<img src="img/weidian.png" class="qr_code" height="90" width="90"/>
				<div class="qr_text">
				<p><b>本站微店</b></p>
				<p><span>扫一扫打开</span></p>
				</div>
		
		</div>
	
	<!--头部导航栏部分（navigation)-->
		<div>
			<ul class="nav" >
			  <li><a href="#">网站首页</a></li>
			  <li><a href="#">期刊分类</a></li>
			  <li><a href="#">发表流程</a></li>
			  <li><a href="#">期刊知识</a></li>
			  <li><a href="#">职称知识</a></li>
			  <li><a href="#">成功案例</a></li>
			  <li><a href="#">网站简介</a></li>
			 </ul>
		</div>
	
	<!--顶部搜索栏部分-->
		<div id="top_select">
		<div class="option">
					<!--<form action="keyword.php" method="post" enctype="multipart/form-data">-->
			<select title="" >
			<option value="教育教学">-教育教学-</option>
						<option value="计算机" selected>-计算机类-</option>
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
		</div>
				
				<input id="search_text" type="text" placeholder="搜索...">
				<a href="#" id="search_img"><img src="img/search.png"/></a>	
				<scan style="position: relative;right:15px;top:1px;">
					<div id="scroll">
						<div class="news-pic"></div>
						 <ul>
						  <li>公告1：论文期刊在线全新改版上线，欢迎咨询！</li>
						  <li>公告2：请用微信扫描网站右上角二维码了解更多信息！</li>
						  <li>公告3：您如有稿件可以在线提交，我们将为您提供免费咨询服务！</li>
						 </ul>
						</div>
		
	</div>
		
	<!--左边广告栏滚动部分-->
		<div class="slideShow">
					<ul>
					<li><img id="img" src="img/advertisement_1.jpg" width=220 height=250 border=0 /></li>
					<li><img id="img" src="img/advertisement_2.jpg" width=220 height=250 border=0 /></li>
					<li><img id="img" src="img/advertisement_3.png" width=220 height=250 border=0 /></li>
					<li><img id="img" src="img/advertisement_4.jpg" width=220 height=250 border=0 /></li>
					</ul>
					<div class="showNav">
						<span class="active">1</span>
						<span>2</span>
						<span>3</span>
						<span>4</span>
					</div>
				</div>	
			
	<!--右边信息栏-->
		<div class="ad_style">
		<div class="ad_logo">
		<div class="rihgt_ad">
					<p>教育教学<img src="img/icon-more.gif" class="ad_img"/></p></div>
					<?php
					$sql="select 刊名,添加日期 from qikan where 所属类型='教育教学' order by 添加日期 desc limit 0,6";
					$res=$conn->query($sql);
					?>
				<table>
				<?php
					while($row=mysqli_fetch_array($res))
					{?>
					<tr>
		
						<td><a href="#"><?php echo $row['刊名'];?></a></td>
						<td><?php echo $row['添加日期'];?></td>
					</tr>	
					<?php
					}
					?>
				</table>
			</div>
		<div class="ad_logo">
		<div class="rihgt_ad">
					<p>学报学刊<img src="img/icon-more.gif" class="ad_img"/></p></div>
			<?php
					$sql="select 刊名,添加日期 from qikan where 所属类型='学报学刊' order by 添加日期 desc limit 0,6";
					$res=$conn->query($sql);
					?>
				<table>
				<?php
					while($row=mysqli_fetch_array($res))
					{?>
					<tr>
		
						<td><a href="#"><?php echo $row['刊名'];?></a></td>
						<td><?php echo $row['添加日期'];?></td>
					</tr>	
					<?php
					}
					?>
				</table>
			</div>
			
		<div class="ad_logo">
		<div class="rihgt_ad">
					<p>社科法制<img src="img/icon-more.gif" class="ad_img"/></p></div>
			<?php
					$sql="select 刊名,添加日期 from qikan where 所属类型='社科法制' order by 添加日期 desc limit 0,6";
					$res=$conn->query($sql);
					?>
				<table>
				<?php
					while($row=mysqli_fetch_array($res))
					{?>
					<tr>
		
						<td><a href="#"><?php echo $row['刊名'];?></a></td>
						<td><?php echo $row['添加日期'];?></td>
					</tr>	
					<?php
					}
					?>
				</table>
			</div>
			
		<div class="ad_logo">
		<div class="rihgt_ad">
					<p>经济管理<img src="img/icon-more.gif" class="ad_img"/></p></div>
			<?php
					$sql="select 刊名,添加日期 from qikan where 所属类型='经济管理' order by 添加日期 desc limit 0,6";
					$res=$conn->query($sql);
					?>
				<table>
				<?php
					while($row=mysqli_fetch_array($res))
					{?>
					<tr>
		
						<td><a href="#"><?php echo $row['刊名'];?></a></td>
						<td><?php echo $row['添加日期'];?></td>
					</tr>	
					<?php
					}
					?>
				</table>
			</div>
			
		<div class="ad_logo">
		<div class="rihgt_ad">
					<p>建筑水利<img src="img/icon-more.gif" class="ad_img"/></p></div>
			<?php
					$sql="select 刊名,添加日期 from qikan where 所属类型='建筑水利' order by 添加日期 desc limit 0,6";
					$res=$conn->query($sql);
					?>
				<table>
				<?php
					while($row=mysqli_fetch_array($res))
					{?>
					<tr>
		
						<td><a href="#"><?php echo $row['刊名'];?></a></td>
						<td><?php echo $row['添加日期'];?></td>
					</tr>	
					<?php
					}
					?>
				</table>
			</div>
			
		<div class="ad_logo">
		<div class="rihgt_ad">
					<p>计算机类<img src="img/icon-more.gif" class="ad_img"/></p></div>
			<?php
					$sql="select 刊名,添加日期 from qikan where 所属类型='计算机' order by 添加日期 desc limit 0,6";
					$res=$conn->query($sql);
					?>
				<table>
				<?php
					while($row=mysqli_fetch_array($res))
					{?>
					<tr>
		
						<td><a href="#"><?php echo $row['刊名'];?></a></td>
						<td><?php echo $row['添加日期'];?></td>
					</tr>	
					<?php
					}
					?>
				</table>
			</div>
			
		<img src="img/banner2.jpg" style="padding-left: 5px;height: 82px;margin-top: 10px;width: 808px">	
		<div class="ad_logo">
		<div class="rihgt_ad">
					<p>农林牧渔<img src="img/icon-more.gif" class="ad_img"/></p></div>
			<?php
					$sql="select 刊名,添加日期 from qikan where 所属类型='农林牧渔' order by 添加日期 desc limit 0,6";
					$res=$conn->query($sql);
					?>
				<table>
				<?php
					while($row=mysqli_fetch_array($res))
					{?>
					<tr>
		
						<td><a href="#"><?php echo $row['刊名'];?></a></td>
						<td><?php echo $row['添加日期'];?></td>
					</tr>	
					<?php
					}
					?>
				</table>
			</div>
		<div class="ad_logo">
		<div class="rihgt_ad">
					<p>医药医学<img src="img/icon-more.gif" class="ad_img"/></p></div>
			<?php
					$sql="select 刊名,添加日期 from qikan where 所属类型='医药医学' order by 添加日期 desc limit 0,6";
					$res=$conn->query($sql);
					?>
				<table>
				<?php
					while($row=mysqli_fetch_array($res))
					{?>
					<tr>
		
						<td><a href="#"><?php echo $row['刊名'];?></a></td>
						<td><?php echo $row['添加日期'];?></td>
					</tr>	
					<?php
					}
					?>
				</table>
			</div>
			
		<div class="ad_logo">
		<div class="rihgt_ad">
					<p>文体传播<img src="img/icon-more.gif" class="ad_img"/></p></div>
			<?php
					$sql="select 刊名,添加日期 from qikan where 所属类型='文体传播' order by 添加日期 desc limit 0,6";
					$res=$conn->query($sql);
					?>
				<table>
				<?php
					while($row=mysqli_fetch_array($res))
					{?>
					<tr>
		
						<td><a href="#"><?php echo $row['刊名'];?></a></td>
						<td><?php echo $row['添加日期'];?></td>
					</tr>	
					<?php
					}
					?>
				</table>
			</div>
					</div>
		
	<!--联系我们-->
		<div style="float:left;border: 1px solid #E8E8E8;">
		<div class="contact_info">
				<p style="position: relative; top:4px;left: 10px;">联系我们
				<img src="img/icon-help.gif" style="position: relative; left: 120px;bottom: -5px;"/></p>
				<div id="mask"></div>
				</div>
			
				<div style="margin-bottom: 50px;">
				<ul id="contact_info_ul">
					<li>联系人：&nbsp;&nbsp;&nbsp;&nbsp;张老师</li>
					<li>联系电话：17701933532</li>
					<li>QQ：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;158923668</li>
				</ul>	
				<span id="but_one">给我们留言</span>
				<span id="but_one">在线投稿</span>
				</div>
		</div>	
	
	<!--推荐期刊-->
		<div style="float:left;margin-top: 10px;width: 225px;">
		<div class="contact_info">
				<p style="position: relative; top:4px;left: 10px;">推荐期刊
				<img src="img/icon-tuijian.png"style="position: relative; left: 110px;bottom: -5px;"/></p>
				<div id="mask"></div>
				<table width="223px" align="center" style="float: left;margin: 0px;position: relative;top:-7px;">
				<tr>
				<td><a href="#">智富时代</a></td>
				</tr>
				<tr>
				<td><a href="#">无线互联科技</a></td>
				</tr>
				<tr>
				<td><a href="#">江苏科技信息</a></td>
				</tr>
				<tr>
				<td><a href="#">现代盐化工</a></td>
				</tr>
				<tr>
				<td><a href="#">中国集体经济</a></td>
				</tr>
				<tr>
				<td><a href="#">当代教育实践与教学研究</a></td>
				</tr>
				</table>
				</div>
				</div>
		
	<!--期刊展示-->
		<div>
		<div style="float:left;border: 1px solid #E8E8E8;width: 1048px;height: 32px;background-color: #f5f5f5;margin-bottom: 15px;">
			<p style="position: relative;top:-12px;left: 8px">期刊展示<img src="img/icon-more.gif" style="position: relative;left: 910px;"/></p></div>	
			<div id="mask_to"></div>
			
			<div id="pic" style="overflow: hidden;width: 1050px">
					<table>
						<tr>
							<td id="td1">
								<table>
									<tr>
                                                                            <td valign="top"><img id="img1" src="img/中国培训.jpg" width="175" height="200"/></td>
                                                                            <td valign="top"><img id="img1" src="img/中国果菜.jpg" width="175" height="200"/></td>
                                                                            <td valign="top"><img id="img1" src="img/信息化建设.png" width="175" height="200"/></td>
                                                                            <td valign="top"><img id="img1" src="img/广东化工.jpg" width="175" height="200"/></td>
                                                                            <td valign="top"><img id="img1" src="img/工业技术创新.jpg" width="175" height="200"/></td>
                                                                            <td valign="top"><img id="img1" src="img/教师.jpg" width="175" height="200"/></td>
									</tr>
								</table>
							</td>
							<td id="td2"></td>
						</tr>
					</table>
				</div>	
			
	</div>
		
	</div>	
	<div class="bottom">
		<div class="container">
		  <div class="about">
			<div class="row1">
			  <div class="title">关于我们</div>
			  <ul>
				<li><a href="###">付款方式</a></li>
				<li><a href="###">联系我们</a></li>
				<li><a href="###">期刊加盟</a></li>
				<li><a href="###">帮助中心</a></li>
			  </ul>
			</div>
		  </div>


		  <div class="link">
			<div class="row1">
			  <div class="title">相关资源</div>
			  <ul>
				<li><a href="http://press.gapp.gov.cn/"target=_blank>中国记者网</a></li>
				<li><a href="http://www.istic.ac.cn/"target=_blank>中国科学技术信息研究</a></li>
				<li><a href="http://www.wanfangdata.com.cn/"target=_blank>万方数据库</a></li>
				<li><a href="http://www.gapp.gov.cn/"target=_blank>国家新闻出版总署</a></li>
				<li><a href="http://www.cqvip.com/"target=_blank>维普网</a></li>
				<li><a href="http://www.cnki.net/"target=_blank>中国知网</a></li>
			  </ul>
			</div>
		  </div>
		  <div class="partner">
			<div class="row1">
			  <div class="title">友情链接</div>
			  <ul>
			   <li><a href="http://press.gapp.gov.cn/"target=_blank>中国记者网</a></li>
				<li><a href="http://www.istic.ac.cn/"target=_blank>中国科学技术信息研究</a></li>
				<li><a href="http://www.wanfangdata.com.cn/"target=_blank>万方数据库</a></li>
				<li><a href="http://www.gapp.gov.cn/"target=_blank>国家新闻出版总署</a></li>
				<li><a href="http://www.cqvip.com/"target=_blank>维普网</a></li>
				<li><a href="http://www.cnki.net/"target=_blank>中国知网</a></li>
			  </ul>
			</div>
		  </div>
		</div>
		</div>
			
		<div class="footer"> 
		本站郑重声明：所有资料均源于网上的共享资源及期刊共享，如有侵犯您的版权或其他有损您利益的行为，请联系指出，本站将及时进行改正删除有关内容 </div>
		<div class="footer"> 
		粤ICP备16010450号&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright © 2015-2016, 版权所有 www.lwqkzx.com. </div>		
			
</body>
</html>
	
	
	<!--	期刊展示-图片滚动-->
	<script type="text/javascript">
		var speed=20
		var marquePic2 = document.getElementById("td2");
		var demo = document.getElementById("pic");
		var marquePic1 = document.getElementById("td1"); 
		marquePic2.innerHTML=marquePic1.innerHTML 
		function Marquee(){ 
		if(demo.scrollLeft>=marquePic1.scrollWidth){ 
		demo.scrollLeft=0 
		}else{ 
		demo.scrollLeft++ 
		} 
		} 
		var MyMar=setInterval(Marquee,speed) 
		demo.onmouseover=function() {clearInterval(MyMar)} 
		demo.onmouseout=function() {MyMar=setInterval(Marquee,speed)} 
			
	</script>
	
	
	