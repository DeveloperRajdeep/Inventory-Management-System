<?php
include 'conn.php';
session_start();
$id=$_SESSION['id'];
if($id==null)
{
	header("location:login1.php");
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
<title>HOME</title>
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
	top: 623px;
	border-radius: 3px;
	background-color:#069;
}
#apDiv17 {
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
	width: 440px;
	height: 260px;
	z-index: 3;
	left: 494px;
	top: 234px;
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
#apDiv15 {
	position: absolute;
	width: 200px;
	height: 64px;
	z-index: 4;
	left: 1058px;
	top: 22px;
}
#apDiv1 #apDiv6 table {
	text-align: center;
	font-family: Verdana, Geneva, sans-serif;
	font-weight: normal;
}
</style>

</head>

<body>
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
    <table width="438" height="256">
      <tr>
        <td width="169">Employee Id</td>
        <td width="25">:</td>
        <td width="228"><?php echo $id ?></td>
      </tr>
      <tr>
        <td>Employee Name</td>
        <td>:</td>
        <td><?php echo $rs[0] ?></td>
      </tr>
      <tr>
        <td>Department</td>
        <td>:</td>
        <td><?php echo $rs[1]?></td>
      </tr>
      <tr>
        <td>Designation</td>
        <td>:</td>
        <td><?php echo $rs[2]?></td>
      </tr>
    </table>
    
  </div>
   <div id="apDiv3">
    <div id="apDiv17">Copyright &copy NIC,Dibrugarh | Powered By:Rajdeep Banerjee</div>
  </div>
</div>
<script src="js/vendor/jquery-1.10.2.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>
</html>