<?php include 'conn.php';
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMIN LOGIN</title>
<!-- GOOGLE FONTS -->
    <link href='css/font.css' rel='stylesheet' type='text/css'>
    <link href='css/font1.css' rel='stylesheet' type='text/css'>
    <!-- /GOOGLE FONTS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/style17.css" />
<script src="js/modernizr.js"></script>
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 100%;
	height: 100%;
	z-index: 1;
	background-image: url(images/bg8.jpg);
	left: 0px;
	top: 0px;
}
#apDiv2 {
	position: absolute;
	width: 1089px;
	height: 111px;
	z-index: 1;
	left: 8px;
	top: 10px;
}
#apDiv3 {
	position: absolute;
	width: auto;
	height: auto;
	z-index: 2;
	left: 21px;
	top: 13px;	
}
.txtg
{
	width: 100px;
	height:30px;
	border-radius:5px;
	font-family:"Agency FB";
	color:#FFF;
	background:#090;
	font-size:18px;
	font-weight:bold;
}

#apDiv4 {
	
	width: 312px;
	height: 34px;
	z-index: 2;
	top: 180px;
	left: 423px;
	color: #F00;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
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
	margin-left:40px;
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

#apDiv5 {
	position: absolute;
	width: 436px;
	height: 281px;
	z-index: 3;
	left: 400px;
	top: 200px;
	font-size: 18px;
	font-weight: bold;
	color: #000;
	border: 1px #000;
	border: 1px solid #F1F1F1;
	-moz-border-radius: 5px;
	border-radius: 15px;
	-moz-box-shadow: 10px 10px 24px #000000;
	-webkit-box-shadow: 10px 10px 24px #000000;
	box-shadow: 10px 10px 24px #000000;
}

</style>
</head>

<body>
<?php
$error="";
if(isset($_POST['login']))
{
$user=$_POST['username'];
$pass=$_POST['password'];
$sql=mysql_query("select * from admin where username='$user' and password='$pass'");
if(mysql_num_rows($sql)==1)
{
	$_SESSION['user']=$user;
	header("location:admin_login_main.php");
	
}
else
{

		$error="INVALID USERNAME OR PASSWORD";
}



}

?>
<div class="container" style="position: absolute; top: 20px; z-index: 999; left: 7%;">
        
           <div class="content">
            <svg viewBox="0 0 800 100">

                <!-- Symbol with text -->
                <symbol id="s-text">
                    <text text-anchor="left" x="0%" y="50%" dy=".35em" class="text--line">
                        ADMINISTRATOR LOGIN

                    </text>
                </symbol>

                <!-- Clippath  with text -->
                <clippath id="cp-text">
                    <text text-anchor="left" x="0%" y="50%" dy=".35em" class="text--line">
                        ADMINISTRATOR LOGIN 
                    </text>
                </clippath>

                <!-- Group for shadow -->
                <g clip-path="url(#cp-text)" class="shadow">
                    <rect width="100%" height="100%" class="anim-shape anim-shape--shadow"></rect>
                </g>

                <!-- Group with clippath for text-->
                <g clip-path="url(#cp-text)" class="colortext">
                    <!-- Animated shapes inside text -->
                    <rect width="100%" height="100%" class="anim-shape"></rect>
                    <rect width="80%" height="100%" class="anim-shape"></rect>
                    <rect width="60%" height="100%" class="anim-shape"></rect>
                    <rect width="40%" height="100%" class="anim-shape"></rect>
                    <rect width="20%" height="100%" class="anim-shape"></rect>
                </g>

                <!-- Transparent copy of text to keep patterned text selectable -->
                <use xlink:href="#s-text" class="text--transparent"></use>

            </svg>
        </div>
      </div>
<div id="apDiv1">
<div id="apDiv5">
  <div id="apDiv3">
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
    <table width="500" cellpadding="5" height="254"  style="font-family: Verdana, Geneva, sans-serif; font-weight: normal;">
      <tr>
        <td>USERNAME</td>
        <td style="font-weight: 600; text-align: center; color:#000;">:</td>
        <td><input name="username" type="text" required="required" class="txtGen" id="textfield" placeholder="username" value="" /></td>
      </tr>
      <tr>
        <td style="font-family: Verdana, Geneva, sans-serif; font-weight: normal;">PASSWORD</td>
        <td style="font-weight: 600; text-align: center;">:</td>
        <td><input type="password" name="password" id="textfield2" required="required" placeholder="password"  class="txtGen" /></td>
      </tr>
      <tr>
        <td height="49">&nbsp;</td>
        <td>&nbsp;</td>
        <td>      <input type="submit" name="login" id="button" class="styled-button-1" value="LOGIN" /></td>
      </tr>
      <tr>
        <td height="49">&nbsp;</td>
        <td>&nbsp;</td>
        <td><div id="apDiv4"><?php echo $error ?></div></td>
      </tr>
    </table>
    </form>
</div>
 </div>
</div>
</body>
</html>