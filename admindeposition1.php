<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 650px;
	height: 288px;
	z-index: 1;
	left: 15px;
	top: 11px;
}
#apDiv2 {
	position: absolute;
	z-index: 1;
	position: absolute;
	background-color: #FFF;
	width: 200px;
	height: 200px;
	z-index: 3;
	left: 71px;
	top: 70px;
	border-radius: 100px;
	box-shadow: 2px 2px 10px #09f;
}
#apDiv2:hover
{
	cursor:pointer;
	width:220px;
	height:220px;
	border-radius: 110px;
	box-shadow: 2px 2px 10px #09f;

}
#apDiv2 p
{
	text-align:center;
	font-family:Agency FB;
	font-size: 24px;
}
#apDiv3 {
	position: absolute;
	background-color: #FFF;
	width: 200px;
	height: 200px;
	z-index: 3;
	left: 375px;
	top: 70px;
	border-radius: 100px;
	box-shadow: 2px 2px 10px #09f;
}
#apDiv3:hover
{
	cursor:pointer;
	width:220px;
	height:220px;
	border-radius: 110px;
	box-shadow: 2px 2px 10px #09f;

}
#apDiv3 p
{
	text-align:center;
	font-family:Agency FB;
	font-size: 24px;
}
#apDiv3:hover a
{
	font-size:26px;
}
#apDiv4 {
	position:absolute;
	width:627px;
	height:39px;
	z-index:3;
	left: 8px;
	top: -5px;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 20px;
	text-align: center;
	color: #ffffff;
	border: 1px #000;
	border: 1px solid #F1F1F1;
	-moz-border-radius: 5px;
	border-radius: 15px;
	-moz-box-shadow: 10px 10px 24px #000000;
	-webkit-box-shadow: 10px 10px 24px #000000;
	box-shadow: 10px 10px 24px #000000;
	background-color: #136EAC;
}
.p{
	margin-top: 80px;
}

a:link {color:green;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {color:red;
	text-decoration: none;
}
a:active {color:#FFF;
	text-decoration: none;
}
</style>
</head>

<body>
<div id="apDiv1">
  <div id="apDiv3"><a href="
depnoncon.php"> <p class="p">Non Consumable Orders</a></p></div>
  <div id="apDiv2"><a href="depcon.php"> <p class="p">Consumable Orders</a></p></div>
   <div id="apDiv4">Outdated/Deposition Items</div>
</div>
</body>
</html>
