<?php
error_reporting(0);
include 'conn.php';
session_start();
$id=$_SESSION['id'];
if($id==null)
{
	header("location:login.php");
}
else
{
$sql="select fullname from empregisterform where employeeid=$id";
$res=mysql_query($sql);
$rs=mysql_fetch_array($res);
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CHECK ORDER STATUS</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 1355px;
	height: 654px;
	z-index: 1;
	position: absolute;
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
	height: 344px;
	z-index: 4;
	left: 325px;
	top: 273px;
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
#apDiv9 {
	position: absolute;
	width: 865px;
	height: 24px;
	z-index: 1;
	left: 5px;
	top: 2px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	text-align: center;
	color:#ffffff;
	border: 1px #000;
	border: 1px solid #F1F1F1;
	-moz-border-radius: 5px;
	border-radius: 15px;
	-moz-box-shadow: 10px 10px 24px #000000;
	-webkit-box-shadow: 10px 10px 24px #000000;
	box-shadow: 10px 10px 24px #000000;
	background-color: #136EAC;
}
#apDiv10 {
	position: absolute;
	width: 796px;
	height: 50px;
	z-index: 2;
	left: 41px;
	top: 43px;
	color: #777;
	color: #FF4747;
	border: 1px #000;
	border: 1px solid #F1F1F1;
	-moz-border-radius: 5px;
	border-radius: 15px;
	-moz-box-shadow: 10px 10px 24px #000000;
	-webkit-box-shadow: 10px 10px 24px #000000;
	box-shadow: 10px 10px 24px #000000;
}
#apDiv11 {
	position: absolute;
	width: 848px;
	height: 221px;
	z-index: 3;
	left: 15px;
	top: 111px;
	color: #777;
	color: #FF4747;
	border: 1px #000;
	border: 1px solid #F1F1F1;
	-moz-border-radius: 5px;
	border-radius: 15px;
	-moz-box-shadow: 10px 10px 24px #000000;
	-webkit-box-shadow: 10px 10px 24px #000000;
	box-shadow: 10px 10px 24px #000000;
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
.txtGen{
	border: 1px solid #B9C4CF;
	background: #FFFFFF;
	margin: 4px 30px 5px 30px;
	border-radius:5px;
	padding: 9px;
	display:block;
	font-size:13px;
	margin-top:-17px;
	width:60%;
	background: 
		-webkit-gradient(
			linear,
			left top,
			left 25,
			from(#FFFFFF),
			color-stop(4%, #fff),
			to(#FFFFFF)
		);
	background: 
		-moz-linear-gradient(
			top,
			#FFFFFF,
			#fff 1px,
			#fff 25px
			);
	-moz-box-shadow: 0px 0px 3px #fff;
	-webkit-box-shadow: 0px 0px 3px #fff;
	box-shadow: 0px 2px 1px rgba(0, 0, 0, 0.1), 0px 2px 3px rgba(104, 122, 144, 0.25) inset;

}
.txtGen:focus{
	background:#fff;
	 -webkit-box-shadow:0px 1px 1px rgba(255,255,255,0.8) inset, 1px 1px 5px rgba(0,0,0,0.4);
    -moz-box-shadow:0px 1px 1px rgba(255,255,255,0.8) inset, 1px 1px 5px rgba(0,0,0,0.4);
    box-shadow:0px 1px 1px rgba(255,255,255,0.8) inset, 1px 1px 5px rgba(0,0,0,0.4);
	text-shadow:0px 1px 1px rgba(0,0,0,0.2);
}
.styled-button-1 {
	-webkit-box-shadow:rgba(0,0,0,0.2) 0 1px 0 0;
	-moz-box-shadow:rgba(0,0,0,0.2) 0 1px 0 0;
	box-shadow:rgba(0,0,0,0.2) 0 1px 0 0;
	color:#ffffff;
	background-color:#FA2;
	border-radius:5px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border:none;
	font-family:'Helvetica Neue',Arial,sans-serif;
	font-size:16px;
	font-weight:700;
	height:32px;
	width:90px;
	padding:4px 16px;
}
.styled-button-1:hover{
     height:32px;
	 cursor:pointer;
    -webkit-box-shadow:0px 1px 1px rgba(255,255,255,0.8) inset, 1px 1px 5px rgba(0,0,0,0.4);
    -moz-box-shadow:0px 1px 1px rgba(255,255,255,0.8) inset, 1px 1px 5px rgba(0,0,0,0.4);
    box-shadow:0px 1px 1px rgba(255,255,255,0.8) inset, 1px 1px 5px rgba(0,0,0,0.4);
	
    color:#fff;}
	.styled-buttn-1:active{
    position:relative;
    top:1px;
    background:#fec354;
    background:-webkit-gradient(linear,left top,left bottom,color-stop(#fec354,0),color-stop(#fecd61,1));
    background:-webkit-linear-gradient(top, #fec354 0%, #fecd61 100%);
    background:-moz-linear-gradient(top, #fec354 0%, #fecd61 100%);
    background:-o-linear-gradient(top, #fec354 0%, #fecd61 100%);
    background:linear-gradient(top, #fec354 0%, #fecd61 100%);
    filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#fec354', endColorstr='#fecd61',GradientType=0 );
    border-color:#d29a3a #cc9436 #c89133;
    text-shadow:0 1px 0 #fee1a0;
    -webkit-box-shadow:0 1px 1px #d4d4d4, inset 0 1px 0 #fed17e;
    -moz-box-shadow:0 1px 1px #d4d4d4, inset 0 1px 0 #fed17e;
    box-shadow:0 1px 1px #d4d4d4, inset 0 1px 0 #fed17e;
}
</style>



<script type="text/javascript">
        window.history.forward();
        function noBack()
        {
            window.history.forward();
        }
</script>
</head>

<body  onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">
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

  <div id="apDiv8">
  
    
    <?php
    if(isset($_GET['submit']))
    {
   $id1=$_GET['id1'];
    $req_no=$_GET['req_no'];
    $type=$_GET['type'];
    $sql1=mysql_query("select DISTINCT(requistion_no),type,status,date,aprvdate from orders where requistion_no=$req_no and type='$type' and  employee_id=$id1");
	if(mysql_num_rows($sql1)>0){
    while($row1=mysql_fetch_array($sql1))
    {
     $req=$row1['requistion_no'];
     $type=$row1['type'];
     $status=$row1['status'];
	 
	 $dat=strtotime($row1['date']);
	 $dat=date("d-m-Y",$dat);
	 $date1=$row1['aprvdate'];
	 
	 
        $sql2=mysql_query("select sum(quantity) from orders where requistion_no=$req and type='$type'");
  
    while($row2=mysql_fetch_array($sql2))
    {
     $qty=$row2['sum(quantity)'];
    }

    }
	
	
	echo '  <div id="apDiv11">';
    
    
    
     echo ' <table width="844" height="196">
        <tr>
          <td width="229">Requistion No :'.$req.'</td>
          <td width="73">&nbsp;</td>
          <td width="251">&nbsp;</td>
          <td width="271">Status:'.$status.'</td>
        </tr>
        <tr>
          <td>Type:'.$type.'</td>
          <td>&nbsp;</td>
          <td>No.of items:'.$qty.'</td>
          <td>Place of Requistion:DIBRUGARH</td>
        </tr>
        <tr>
          <td>Requistion Date:'.$dat.' </td>
          <td></td>
          <td>Approval Date:'.$date1.' </td>
          <td>Issue Date:</td>
        </tr>
        <tr>
          <td>Remarks:</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>';
	  echo '</div>';
	}
	else
	{
	echo "<br><br><br><br><br><br><br>No Record Found!!!";}
	}
      ?>
      
    
    <div id="apDiv10">
      <table width="795" height="46">
      <form action="" method="get" >
        <tr>
          <td width="277"><label for="textfield"></label>
            <input type="text" name="req_no" placeholder="Enter Your Requistion No." class="txtGen" required='required' id="textfield" />
            <input type="hidden" name="id1" value="<?php echo $id ?>"</td>
          <td width="313">
              <label for="select"></label>
              <select name="type" class="txtGen" id="select" >
            
            <option value=' '>Choose Type:</option>
               <option value="consumable">Consumable</option>
           <option value="nonconsumable">Non Consumable</option></select></td>
          <td width="189"><input type="submit" name="submit" class="styled-button-1" id="button" value="Submit" />
            <input type="reset" name="button2" class="styled-button-1"  id="button2" value="Reset" /></td>
        </tr>
        </form>
      </table>
    </div>
    <div id="apDiv9">Status of all the Requistions</div>
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