<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<style type="text/css">
.all {
    width: 1200px;
    
    margin: 0 auto;
    background: #E8ECEF;
}
.head {
    width: 100%;
    height: 60px;
    border: 1px solid #FFFFFF;
    background: #58CCDB;
    line-height: 60px;
    display: block;
}
.left {
    width: 20%;
    height: 550px;
    border: 1px solid white;
    background: #444C57;
}
.left ul {
    margin: 0;
    padding: 0;
    width: 100%;
    height: 40px;
    padding-top: 5px;
}
.left ul li {
    list-style-type: none;
    width: 100%;
    height: 40px;
    text-align: center;
    line-height: 40px;
    border-bottom: 1px solid white;
}
.left ul li a {
    text-decoration: none;
    color: white;
    display: block;
}
.left ul li a:hover {
    background: white;
    color: black;
}
.right-all {
    width: 75%;
    position: absolute;
    top: 72px;
    left: 24%;
}
.right-head {
    width: 98%;
    height: 35px;
    line-height: 35px;
    background: white;
    border: 1px solid white;
}
.search-all {
    margin-top: 10px;
    width: 98%;
    height: 100px;
    border: 1px solid white;
    background: white;
    padding-left: 10px;
}
select {
    margin-top: 5px;
    margin-left: 5px;
    width: 90px;
    height: 32px;
    float: left;
    border-radius: 5px;
    border-color: #a0a0a0;
}
.search {
    margin-top: 5px;
    float: left;
    border: 1px solid #a0a0a0;
    border-radius: 5px;
    height: 30px;
    width: 130px;
}
.search_text {
    float: left;
    border: none;
    height: 28px;
    width: 65px;
    color: #a0a0a0;
    line-height: 30px;
    margin-left: 5px;
    outline: none;
}
.nav_btn input {
    background-image: url("img/search.png");
    background-repeat: no-repeat; /*background-image不会重复*/
    float: right;
    border: none;
    height: 28px;
    line-height: 28px;
    background-position: center; /*设置背景图像的起始位置*/
    width: 26px;
    background-color: transparent; /*设置为透明*/
}
.right-content {
    margin-top: 10px;
    width: 100%;
    height: 500px;
    border: 1px solid #FFFFFF;
}
.right-content table tr {
    width: 100%;
    height: 20px;
}
.page1 {
	clear: both;
    width: 100%;
	padding-left: 34%;
	}
</style>
<body>
<?php
	UPDATE `qikan` SET `id`=[value-1],`刊名`=[value-2],`主办`=[value-3],`周期`=[value-4],`出版地`=[value-5],`语种`=[value-6],`开本`=[value-7],`ISSN`=[value-8],`CN`=[value-9],`邮发代号`=[value-10],`复合影响因子`=[value-11],`综合影响因子`=[value-12],`所属类型`=[value-13],`添加日期`=[value-14],`图片URL`=[value-15],`期刊简介`=[value-16] WHERE 1
	?>
</body>
</html>