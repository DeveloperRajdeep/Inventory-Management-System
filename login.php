<?php include 'conn.php';
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>REGISTER & LOGIN</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 1348px;
	height: 735px;
	z-index: 1;
	top: 0px;
	left: -1px;
	background-image: url(images/beige_paper.png);
}
#apDiv2 {
	position: relative;
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
	position: absolute;
	width: 597px;
	height: 55px;
	z-index: 1;
	font-family: "Agency FB";
	font-size: 10px;
	left: 9px;
	top: -7px;
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
#apDiv1 #apDiv2 #apDiv3 p {
	text-align: center;
}
#apDiv1 #apDiv2 #apDiv3 p {
	font-weight: bold;
}
#apDiv1 #apDiv2 #apDiv3 p {
	font-weight: normal;
}
#apDiv1 #apDiv2 #apDiv3 p {
	font-size: 24px;
	font-family: Arial, Helvetica, sans-serif;
}
#apDiv4 {
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
#apDiv5 {
	position: absolute;
	width: 148px;
	height: 117px;
	z-index: 2;
	left: 957px;
	top: 1px;
}
#apDiv6 {
	position: absolute;
	width: 1172px;
	height: 602px;
	z-index: 3;
	left: 14px;
	top: 126px;
}
#apDiv7 {
	position: absolute;
	width: 505px;
	height: 591px;
	z-index: 1;
	left: 20px;
	font-size: 18px;
	font-weight: bold;
	color: #777;
	color:#FF4747;
	border: 1px #000;
	border: 1px solid #F1F1F1;
	-moz-border-radius: 5px;
	border-radius: 15px;
	-moz-box-shadow: 10px 10px 24px #000000;
	-webkit-box-shadow: 10px 10px 24px #000000;
	box-shadow: 10px 10px 24px #000000;
	background-image: url(images/beige_paper.png)
}
#apDiv8 {
	position: absolute;
	width: 455px;
	height: 310px;
	z-index: 1;
	left: 683px;
	top: 39px;
	font-size: 18px;
	font-weight: bold;
	color: #777;
	color:#FF4747;
	border: 1px #000;
	border: 1px solid #F1F1F1;
	-moz-border-radius: 5px;
	border-radius: 15px;
	-moz-box-shadow: 10px 10px 24px #000000;
	-webkit-box-shadow: 10px 10px 24px #000000;
	box-shadow: 10px 10px 24px #000000;
	background-image: url(images/beige_paper.png)
}
#apDiv9 {
	position: absolute;
    width: 304px;
	height: 26px;
	z-index: 2;
	left: 97px;
	top: 8px;
	font-family: Verdana, Geneva, sans-serif;
	text-align: center;
	font-size: 18px;
	font-weight: normal;
}
#apDiv10 {
	position: absolute;
	width: 307px;
	height: 31px;
	z-index: 1;
	left: 67px;
	top: 11px;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 18px;
	text-align: center;
	font-weight: normal;
}
#apDiv11 {
	position: absolute;
	width: 470px;
	height: 540px;
	z-index: 3;
	left: 28px;
	top: 43px;
}
#apDiv12 {
	position: absolute;
	width: 429px;
	height: 255px;
	z-index: 2;
	left: 12px;
	top: 48px;
}
#apDiv13 {
	position: absolute;
	width: 419px;
	height: 41px;
	z-index: 2;
	left: 7px;
	top: 334px;
}
#apDiv14 {
	position: absolute;
	width: 241px;
	height: 116px;
	z-index: 3;
	left: 942px;
	top: -4px;
}
#apDiv15 {
	position: absolute;
	width: 200px;
	height: 64px;
	z-index: 4;
	left: 1058px;
	top: 22px;
}
</style>

<style type="text/css">
#apDiv16 {
	position: absolute;
	width: auto;
	height: auto;
	z-index: 2;
	left: 359px;
	top: 144px;
	background-color:#069;
	border-radius:5px;
	box-shadow: 0px 10px 20px;
}
#apDiv17 {
	position: absolute;
	width: auto;
	height: auto;
	z-index: 2;
	left: 359px;
	top: 144px;
	background-color:#069;
	border-radius:5px;
	box-shadow: 0px 10px 20px;
}
#apDiv18 {
	position: absolute;
	width: auto;
	height: auto;
	z-index: 2;
	left: 359px;
	top: 144px;
	background-color:#069;
	border-radius:5px;
	box-shadow: 0px 10px 20px;
}
#apDiv19 {
	position: absolute;
	width: auto;
	height: auto;
	z-index: 2;
	left: 359px;
	top: 144px;
	background-color:#069;
	border-radius:5px;
	box-shadow: 0px 10px 20px;
}
#apDiv20 {
	position: absolute;
	width: 280px;
	height: 35px;
	z-index: 2;
	top: 430px;
	right:200px;
	color:red;
	font-family:Verdana, Geneva, sans-serif;
	font-size:14px;
}
.txtGen{
	border: 1px solid #B9C4CF;
	background: #FFFFFF;
	margin: 5px 30px 0px 30px;
	border-radius:5px;
	padding: 9px;
	display:block;
	font-size:13px;
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
.styled-button-2 {
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
	width:160px;
	padding:4px 16px;
}
.styled-button-2:hover{
     height:32px;
	 cursor:pointer;
    -webkit-box-shadow:0px 1px 1px rgba(255,255,255,0.8) inset, 1px 1px 5px rgba(0,0,0,0.4);
    -moz-box-shadow:0px 1px 1px rgba(255,255,255,0.8) inset, 1px 1px 5px rgba(0,0,0,0.4);
    box-shadow:0px 1px 1px rgba(255,255,255,0.8) inset, 1px 1px 5px rgba(0,0,0,0.4);
	
    color:#fff;}
	.styled-button-2:active{
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
</head>

<body>
<?php
if(isset($_POST['login']))
{
	

$empid=$_POST['employeeid'];
$pass=$_POST['password'];
$sql=mysql_query("select * from empregisterform where employeeid='$empid' and password='$pass' and status=1");
if(mysql_num_rows($sql)==1)
{
	$_SESSION['id']=$empid;
	header("location:home.php");
}
else
{

		
		echo "<div id='apDiv20'>"."INVALID USERNAME OR PASSWORD"."</div>";
}



}
?>
<div id="apDiv1">
  <div id="apDiv2">
    <label for="textfield"></label>
    <div id="apDiv15"><img src="niclogo.png" width="233" height="55" /></div>
    <div id="apDiv4">INVENTORY CONTROL SYSTEM</div>
    <div id="apDiv3">
      <p>NATIONAL INFORMATICS CENTER,DIBRUGARH    </p>
    </div>
  </div>
  <div id="apDiv6">
    <div id="apDiv7">
      <div id="apDiv11">
      <form action="dologin.php" method="post">
        <table width="465" height="532">
          <tr>
            <td width="187" height="46" style="font-family: Verdana, Geneva, sans-serif; font-weight: normal;">Full Name</td>
            <td width="10">:</td>
            <td width="217"><label for="textfield2"></label>
            <input type="text" name="fullname" id="textfield2" class="txtGen" required='required' placeholder="Enter Full Name" /></td>
          </tr>
          <tr>
            <td height="43" style="font-family: Verdana, Geneva, sans-serif; font-weight: normal;">Employee Id</td>
            <td>:</td>
            <td><input type="text" name="employeeid" id="textfield" class="txtGen" required='required' placeholder="Enter Employee Id"/></td>
          </tr>
          <tr>
            <td height="43" style="font-family: Verdana, Geneva, sans-serif; font-weight: normal;">Department</td>
            <td>:</td>
            <td><input type="text" name="department" id="textfield8" class="txtGen" required='required' placeholder="Enter Department Name"/></td>
          </tr>
          <tr>
            <td height="43" style="font-family: Verdana, Geneva, sans-serif; font-weight: normal;">Designation</td>
            <td>:</td>
            <td><input type="text" name="designation" id="textfield9" class="txtGen" required='required' placeholder="Enter Your Designation"/></td>
          </tr>
          <tr>
            <td height="43" style="font-family: Verdana, Geneva, sans-serif; font-weight: normal;">E-mail Id</td>
            <td>:</td>
            <td><label for="textfield7"></label>
              <input type="text" name="emailid" id="textfield7" class="txtGen" required='required' placeholder="Enter Your Email Id" /></td>
          </tr>
          <tr>
            <td height="47" style="font-family: Verdana, Geneva, sans-serif; font-weight: normal;">Password</td>
            <td>:</td>
            <td><input type="password" name="password" id="textfield3" class="txtGen" required='required' placeholder="Enter Your Password" /></td>
          </tr>
          <tr>
            <td height="39" style="font-family: Verdana, Geneva, sans-serif; font-weight: normal;">Confirm Password</td>
            <td>:</td>
            <td><p>
              <input type="password" name="confirmpass" id="textfield4" class="txtGen" required='required' placeholder="Enter Confirm Password" />
            </p></td>
          </tr>
          <tr>
            <td height="52" style="font-family: Verdana, Geneva, sans-serif; font-weight: normal;">Security Question</td>
            <td>:</td>
            <td><label for="select"></label>
              <select name="securityques" class="txtGen"id="">
               <option value=' '>Choose</option>
               <option value="petname">What is your pet name?</option>
           <option value="bestfrnd">Who is your best friend?</option>
           <option value="sitemost">Which site do you visit most?</option>
            </select></td>
          </tr>
          <tr>
            <td height="45" style="font-family: Verdana, Geneva, sans-serif; font-weight: normal;">Security Answer</td>
            <td>:</td>
            <td><input type="text" name="securityans" id="textfield5" class="txtGen" required='required' placeholder="Enter Security Answer" /></td>
          </tr>
          <tr>
            <td height="22">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="40">&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" name="register" id="button" class="styled-button-1" value="Register" />
            <input type="reset" name="button2" class="styled-button-1" id="button2" value="Reset" /></td>
          </tr>
        </table>
        </form>
      </div>
      <div id="apDiv8">
        <div id="apDiv12">
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
          <table width="426" height="250">
            <tr>
              <td width="132" height="65" style="font-family: Verdana, Geneva, sans-serif; font-weight: normal;">Employee Id</td>
              <td width="17" style="font-weight: 600; text-align: center;">:</td>
              <td width="261"><label for="textfield6"></label>
              <input type="text" name="employeeid" class="txtGen" id="textfield6" required='required' placeholder='Employee Id' /></td>
            </tr>
            <tr>
              <td height="68" style="font-family: Verdana, Geneva, sans-serif; font-weight: normal;">Password</td>
              <td style="font-weight: 600; text-align: center;">:</td>
              <td><label for="textfield6"></label>
              <input type="password" name="password" class="txtGen" id="textfield6" required='required' placeholder='Enter Password' /></td>
            </tr>
            <tr>
              <td height="65">&nbsp;</td>
              <td>&nbsp;</td>
              <td><input type="submit" name="login" class="styled-button-1" id="button3" value="Login" />
              <a href="login.php?id=forgot"><input type="button" class="styled-button-2" value="Forgot Password??" /></a></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td><div id="apDiv20"></div></td>
            </tr>
          </table>
          </form>
        </div>
        <div id="apDiv10">REGISTERED EMPLOYEE LOGIN</div>
      </div>
      <div id="apDiv9">EMPLOYEE REGISTRATION</div>
    </div>
    <?php if(isset($_GET['id']) && $_GET['id']=='forgot')
	{
		?>
    <div id="apDiv16"><table width="400" cellpadding="20">
    <form action="login.php" method="get">
  <tr>
    <td><label for="textfield10"></label>
      <input type="text" name="emp_id" id="textfield10" required='required' placeholder="Enter Employee Id"/></td>
    <td><input type="submit" name="submit" value="Search" /> <input type="button" value="Cancel" onclick="window.location='login.php'" /></td>
  </tr>
  </form>
</table>
</div>
<?php
	}
	?>
  
  <?php if(isset($_GET['submit']))
	{
		$emp_id=$_GET['emp_id'];
		$sql3=mysql_query("select * from empregisterform where employeeid='$emp_id' and status=1");
 if(mysql_num_rows($sql3)>=1)
 {
	 while($res=mysql_fetch_array($sql3))
	 {
		 $question=$res['securityques'];
	 }
		?>
    <div id="apDiv17"><table width="400" cellpadding="20">
    <form action="login.php" method="get">
    <input type="hidden" name="e_id" value="<?php echo $emp_id ?>"/>
    <input type="hidden" name="s_qus" value="<?php echo $question ?>"/>
  <tr>
    <td>Security Question:</td>
    <td><?php echo $question ?>
      </td>
  </tr>
  <tr>
    <td>Answer :</td>
    <td><label for="textfield10"></label>
      <input type="text" name="answer" id="textfield10" /></td>
  </tr>
  <tr>
    <td></td>
    <td>
    <input type="submit" name="reset" value="Submit" /> <input type="button" value="Cancel"  onclick="window.location='login.php'"  />
     </td>
  </tr>
  </form>
</table>
</div>
<?php
 }
	}
	?>  
    
    <?php if(isset($_GET['reset']))
	{
		$eid=$_GET['e_id'];
		$squs=$_GET['s_qus'];
		$answer=$_GET['answer'];
		?>
    <div id="apDiv18"><table width="400" cellpadding="20">
    <form action="login.php" method="get">
    <input type="hidden" name="eid" value="<?php echo $eid ?>"/>
    <input type="hidden" name="squs" value="<?php echo $squs ?>"/>
    <input type="hidden" name="sans" value="<?php echo $answer ?>"/>
  <tr>
    <td>New Password:</td>
    <td>
    <input type="text" name="npass" id="textfield10" />
      </td>
  </tr>
  <tr>
    <td>Confirm Password :</td>
    <td><label for="textfield10"></label>
      <input type="text" name="cpass" id="textfield10" /></td>
  </tr>
  <tr>
    <td></td>
    <td>
    <input type="submit" name="change" value="Change" /> <input type="button" value="Cancel"  onclick="window.location='login.php'" />
     </td>
  </tr>
  </form>
</table>
</div>
<?php

	}
	?>  
    
    <?php if(isset($_GET['change']))
	{
		$eid=$_GET['eid'];
		$squs=$_GET['squs'];
		$sans=$_GET['sans'];
		$npass=$_GET['npass'];
		?>
    <div id="apDiv19"><table width="400" cellpadding="20">
  <tr>
    <td>
    <?php
    $sql7=mysql_query("update empregisterform set password='$npass' where securityques='$squs' and securityans='$sans' and  employeeid='$eid'");
	if($sql7>0)
	{
		echo 'Password has been changed successfully';
	}
	else
	{
		echo 'Failed! Try Again Later.';
	}
    ?>
    </td>
  </tr>
</table>
</div>
<?php
	}
	?>
    
  </div>
</div>
</body>
</html>