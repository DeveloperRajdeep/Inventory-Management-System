<?php
include 'conn.php';
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 667px;
	height: 151px;
	z-index: 1;
	left: 5px;
	top: 49px;
}
#apDiv2 {
	position:absolute;
	width:676px;
	height:208px;
	z-index:2;
	left: 6px;
	top: 9px;
}
#apDiv1 table {
	font-family: Verdana, Geneva, sans-serif;
	text-align: center;
	font-size: 14px;
}
table, td, th {
    border: 5px solid green;
}

td {
    background-color: #099;
    color: white;
}
#apDiv3 {
	position:absolute;
	width:641px;
	height:30px;
	z-index:1;
	left: 13px;
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

<body>
<div id="apDiv2">
<div id="apDiv1">
   <table width="663" style="border-style: inset;" height="148">
    <tr>
      <td width="82">Serial No.</td>
      <td width="256">Item name</td>
      <td width="115">Availability</td>
      <td width="89">Date</td>
      <td width="97">Time</td>
    </tr>
     <?php
     $sql="select * from nonconsumable where quantity=0";
     $res=mysql_query($sql);
     $j=1;
     while($row=mysql_fetch_array($res))
     {
     ?>
    <tr>
      <td><?php echo $j++ ?></td>
      <td><?php echo $row['name']?></td>
      <td><?php echo $row['quantity']?></td>
      <td><?php echo $row['date']?></td>
      <td><?php echo $row['time']?></td>
    </tr>
     <?php
      }
	  ?>
  </table>
</div>
<div id="apDiv3">Outdated Non Consumable Items</div>
</div>
</body>
</html>
