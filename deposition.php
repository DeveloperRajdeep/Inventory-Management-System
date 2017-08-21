<?php
include 'conn.php';
session_start();
$id=$_SESSION['id'];
if($id==null)
{
	header("location:login.php");
}
else
{
$sql="select fullname,department,designation from empregisterform where employeeid=$id";
$res=mysql_query($sql);
$rs=mysql_fetch_array($res);
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 1355px;
	height: 654px;
	z-index: 1;
	background-image: url(images/beige_paper.png);
	left: 2px;
	top: -1px;
}
#apDiv2 {
	position: absolute;
	width: 1305px;
	height: 100px;
	z-index: 1;
	left: 25px;
	top: 12px;
	border-radius: 5px;
	box-shadow: 0px 10px 20px;
	background-image: url(images/bdy-back.jpg);
}
#apDiv3 {
	position:absolute;
	width:1359px;
	height:35px;
	z-index:4;
	left: -3px;
	top: 617px;
	border-radius: 3px;
	background-color:#069;
}
#apDiv18 {
	position:absolute;
	width:529px;
	height:20px;
	z-index:1;
	top: 7px;
	left: 482px;
	text-align: left;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
	color: #FFF;
}
</style>
<link rel="stylesheet" type="text/css" href="css/fonts.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
<style type="text/css">
#apDiv4 {
	position: absolute;
	width: 597px;
	height: 37px;
	z-index: 1;
	font-family: "Agency FB";
	font-size: 10px;
	left: 10px;
	top: 20px;
	color: #0000FF;
	-moz-box-shadow: 0 0 5px 5px #888;
	-webkit-box-shadow: 0 0 5px 5px#888;
	text-shadow: 1px 0 1px #DDD,
               2px 0 2px #c9c9c9,
                3px 0 3px #EEE,
                4px 0 4px  #b9b9b9,
                5px 0 5px #FFF,
                6px 1px rgba(0,0,0,.1),
               0 0 5px rgba(0,0,0,.1),
               0 1px 3px rgba(0,0,0,.3),
               0 3px 5px rgba(0,0,0,.2),
               0 5px 10px rgba(0,0,0,.25),
               0 10px 10px rgba(0,0,0,.2),
               0 20px 20px rgba(0,0,0,.15);
}
#apDiv5 {
	position: absolute;
	width: 417px;
	height: 28px;
	z-index: 2;
	left: 87px;
	top: 63px;
	font-family: Arial, Helvetica, sans-serif;
	text-align: center;
	font-size: 24px;
	color:#0000FF;
	-moz-box-shadow: 0 0 5px 5px #888;
	-webkit-box-shadow: 0 0 5px 5px#888;
	text-shadow:  1px 0 1px #DDD,
               2px 0 2px #c9c9c9,
                3px 0 3px #EEE,
                4px 0 4px  #b9b9b9,
                5px 0 5px #FFF,
                6px 1px rgba(0,0,0,.1),
               0 0 5px rgba(0,0,0,.1),
               0 1px 3px rgba(0,0,0,.3),
               0 3px 5px rgba(0,0,0,.2),
               0 5px 10px rgba(0,0,0,.25),
               0 10px 10px rgba(0,0,0,.2),
               0 20px 20px rgba(0,0,0,.15);
}
#apDiv6 {
	position: absolute;
	width: 344px;
	height: 84px;
	z-index: 3;
	left: 8px;
	top: 181px;
	font-size: 18px;
	font-weight: bold;
	color: #777;
	color: #FF4747;
	border: 1px #000;
	border: 1px solid #F1F1F1;
	-moz-border-radius: 5px;
	border-radius: 15px;
	-moz-box-shadow: 10px 10px 24px #000000;
	-webkit-box-shadow: 10px 10px 24px #000000;
	box-shadow: 10px 10px 24px #000000;
	background-image: url(images/beige_paper.png);
}
#apDiv7 {
	position: absolute;
	width: 402px;
	height: 115px;
	z-index: 4;
	left: 405px;
	top: 308px;
}
#apDiv8 {
	position: absolute;
	width: 874px;
	height: 327px;
	z-index: 4;
	left: 210px;
	top: 273px;
	
}
#apDiv9 {
	position: absolute;
	width: 689px;
	height: 24px;
	z-index: 1;
	left: 76px;
	top: 2px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	text-align: center;
}
#apDiv10 {
	position: absolute;
	width: 796px;
	height: 50px;
	z-index: 2;
	left: 41px;
	top: 33px;
}
#apDiv11 {
	position: absolute;
	width: 848px;
	height: 201px;
	z-index: 3;
	left: 15px;
	top: 116px;
}
#apDiv1 #apDiv8 #apDiv11 table {
	text-align: justify;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
}
#apDiv1 #apDiv8 #apDiv10 table {
	font-family: Arial, Helvetica, sans-serif;
}
#apDiv1 #apDiv8 #apDiv10 table {
	font-size: 14px;
}
#apDiv1 #apDiv8 #apDiv10 table {
	font-size: 16px;
	text-align: justify;
}
#apDiv12 {
	position: absolute;
	width: 735px;
	height: 349px;
	z-index: 4;
	left: 351px;
	top: 223px;
}

#apDiv13 {
	position: absolute;
	width: 570px;
	height: 312px;
	z-index: 4;
	left: 433px;
	top: 227px;
	color: #777;
	color: #FF4747;
	border: 1px #000;
	border: 1px solid #F1F1F1;
	-moz-border-radius: 5px;
	border-radius: 15px;
	-moz-box-shadow: 10px 10px 24px #000000;
	-webkit-box-shadow: 10px 10px 24px #000000;
	box-shadow: 10px 10px 24px #000000;
	background-image: url(images/beige_paper.png);
}
#apDiv14 {
	position: absolute;
	background-color: #FFF;
	width: 200px;
	height: 200px;
	z-index: 3;
	left: 33px;
	top: 83px;
	border-radius: 100px;
	box-shadow: 2px 2px 10px #09f;
}
#apDiv14:hover
{
	cursor:pointer;
	width:220px;
	height:220px;
	border-radius: 110px;
	box-shadow: 2px 2px 10px #09f;

}
#apDiv1 #apDiv13 #apDiv14 table {
	text-align: center;
}
#apDiv1 #apDiv13 #apDiv14 table {
	font-family: Arial, Helvetica, sans-serif;
}
#apDiv1 #apDiv13 #apDiv14 table {
	font-size: 24px;
}
#apDiv15 {
	position: absolute;
	width: 200px;
	height: 64px;
	z-index: 4;
	left: 1058px;
	top: 22px;
}
#apDiv1 #apDiv2 #apDiv4 p {
	text-align: center;
}
#apDiv1 #apDiv2 #apDiv4 p {
	font-weight: bold;
}
#apDiv1 #apDiv2 #apDiv4 p {
	font-weight: normal;
}
#apDiv1 #apDiv2 #apDiv4 p {
	font-size: 24px;
	font-family: Arial, Helvetica, sans-serif;
}
#apDiv16 {
	position: absolute;
	background-color: #FFF;
	width: 200px;
	height: 200px;
	z-index: 3;
	left: 324px;
	top: 83px;
	border-radius: 100px;
	box-shadow: 2px 2px 10px #09f;
}
#apDiv16:hover
{
	cursor:pointer;
	width:220px;
	height:220px;
	border-radius: 110px;
	box-shadow: 2px 2px 10px #09f;

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
 #apDiv14 a {
	text-align:center;
	font-family:Agency FB;
	font-size: 30px;
}
 #apDiv16 a {
	text-align:center;
	font-family:Agency FB;
	font-size: 26px;
}
#apDiv17 {
	position: absolute;
	width: 558px;
	height: 33px;
	z-index: 4;
	left: 8px;
	top: 7px;
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
</style>
</head>

<body >
<div id="apDiv1">
 <div id="apDiv2">
   <div id="apDiv15"><img src="niclogo.png" width="233" height="55" /></div>
    <div id="apDiv4">
    <p>NATIONAL INFORMATICS CENTER,DIBRUGARH</p> </div>
    <div id="apDiv5">INVENTORY CONTROL SYSTEM</div>
  </div>
  <header class="header-container" style="position:absolute;top:113px;width:96%;z-index:9999;left:2%;">
    
    <!-- Main Header  -->
    <div class="main-header affix">

        <!-- Moblie Nav Wrapper  -->
        <div class="mobile-nav-wrapper">
            <div class="container ">

                <!-- logo  -->
               <div id="logo">
<a href="index.htm"><img src="logo.png"  alt=""></a> 
</div>

                <div id="sb-search" class="sb-search" style="display:none;">
                    <form>
                        <input class="sb-search-input" placeholder="Search" type="text" name="search" id="search">
                        <input class="sb-search-submit" type="submit" value="">
                        <span class="sb-icon-search"></span>
                    </form>
                </div>
                <!-- moblie-menu-icon -->

                <div class="mobile-menu-icon">
                    <i class="fa fa-bars"></i>
                </div> 

                <!-- Nav --> 
                <nav class="main-nav mobile-menu">

                    <ul class="clearfix">
					<li class="parent active"><a href="home.php"> REQUISTION</a>
				<ul class="sub-menu">
				    <li><a href="consumable.php">Consumable</a>
					
					</li>
					  <li><a href="nonconsumable.php">Non Consumable</a>
					
					</li>
				</ul>
			</li>
			<li class="parent"><a href="deposition.php"> DEPOSITION</a>
				<ul class="sub-menu">
					<li><a href="depositioncon.php">Consumable Items</a></li>
                    <li><a href="depositionnoncon.php">Non Consumable Items</a></li>
				</ul>
			</li>
            <li><a href="viewstock.php">STOCK</a>
            </li>
			<li class="parent"><a href="#">MY PROFILE</a>
				<ul class="sub-menu">
					<li><a href="viewprofile.php">Update Profile</a>
						
					</li>
                    <li><a href="status.php">Order Status</a>
						
					</li>
                    <li><a href="printbill.php">Print Bill</a>
						
					</li>
                    <li><a href="myorders.php">My Orders</a>
						
					</li>
                    <li><a href="logout.php">Logout</a>
						
					</li>
					
			  </ul>
			</li>
            
<li><a href="#">&nbsp;</a></li>
                       
                          
                        
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
  <div id="apDiv6">
    <table width="343" height="81">
      <tr>
        <td width="159" style="font-family: Verdana, Geneva, sans-serif; font-weight: normal;">Employee Id</td>
        <td width="10" style="font-weight: 600; text-align: center;">:</td>
        <td width="158" style="font-family: Verdana, Geneva, sans-serif; font-weight: normal;"><?php echo $id ?></td>
      </tr>
      <tr>
        <td style="font-family: Verdana, Geneva, sans-serif; font-weight: normal;">Employee Name</td>
        <td style="font-weight: 600; text-align: center;">:</td>
        <td style="font-family: Verdana, Geneva, sans-serif; font-weight: normal;"><?php echo $rs[0] ?></td>
      </tr>
    </table>
    
  </div>
  <div id="apDiv13">
    <div id="apDiv14"><a href="depositioncon.php"><p class="p">Consumable Items</p></a></div>
    <div id="apDiv16"><a href="depositionnoncon.php"><p class="p">Non Consumable Items</p></a></div>
    <div id="apDiv17">Deposition Items</div>
  </div>
  <div id="apDiv3">
    <div id="apDiv18">Copyright &copy NIC,Dibrugarh | Powered By:Rajdeep Banerjee</div>
  </div>
  
</div>
<script src="js/vendor/jquery-1.10.2.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>
</html>