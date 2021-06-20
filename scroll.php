<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
	<style type="text/css">
		 ul{
				margin: 0;
				padding: 0;
				position: relative;
				width: 1000px;
				} 
		
		.leftsidebar{
			width: 220px;
			
		}		

		.slideShow{
				width: 300px;
				height: 250px;
				border: 1px #eeeeee solid;
				margin: 10px auto;
				position: relative;
				overflow: hidden;
		}
		
		.slideShow ul li{
				float: left;
				width: 220px;
				list-style-type: none;
		}
		
		.slideShow .showNav{
			position: absolute;
			right: 10px;
			bottom: 5px;
			text-align: center;
			font-size: 12px;
			line-height: 20px;
		}
		
		.slideShow .showNav span{
			cursor: pointer;
			display: block;
			float: left;
			width: 20px;
			height: 20px;
			background: #ffa720;
			margin-left: 2px;
			color: #fff;
			
		}
		
		.slideShow .showNav .active{
			background: #fb8229;
		}
		
	
	
	
	</style>
	
		<script type="text/javascript" src="js/jquery-1.11.0.js"></script>
        <script type="text/javascript" src="js/scroll.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/slideShow.js"></script>
	
	
<body>
	
	<div class="leftsidebar">
				<div class="slideShow">
					<ul>
					<li><img id="img" src="img/advertisement_1.jpg" width=300 height=250 border=0 /></li>
					<li><img id="img" src="img/advertisement_2.jpg" width=300 height=250 border=0 /></li>
					<li><img id="img" src="img/advertisement_3.png" width=300 height=250 border=0 /></li>
					<li><img id="img" src="img/advertisement_4.jpg" width=300 height=250 border=0 /></li>
					</ul>
					<div class="showNav">
						<span class="active">1</span>
						<span>2</span>
						<span>3</span>
						<span>4</span>
					</div>
					
				</div>
			</div>
	
	
</body>
</html>