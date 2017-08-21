
<?php
include 'conn.php';
session_start();
$user=$_SESSION['user'];
if($user==null)
{
	header("location:adminlogin.php");
}

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
	left: 17px;
	top: 5px;
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
</style>
</head>

<body>
<div id="apDiv1">
  <div align="center">
    <table width="723" style="border-style: inset;" height="175">
      <tr>
        <td width="99">Serial No.</td>
        <td width="264">Name of the Quantity</td>
        <td width="142">Quantity Available</td>
        <td width="96">Date</td>
        <td width="84">Time</td>
      </tr>
     <?php
  $sql="select * from his_con";
  $res=mysql_query($sql);
  $j=1;
  while($row=mysql_fetch_array($res))
  {
  ?>
     
      <tr>
        <td><?php echo $j++ ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['quantity'] ?></td>
        <td><?php echo $row['date'] ?></td>
        <td><?php echo $row['time'] ?></td>
      </tr>
      <?php
      }
	  ?>
    </table>
  </div>
</div>
</body>
</html>
