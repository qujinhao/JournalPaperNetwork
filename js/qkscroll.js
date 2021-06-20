// JavaScript Document




//期刊展示-图片滚动

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

	