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
	width: 816px;
	height: 279px;
	z-index: 1;
	left: 15px;
	top: 12px;
}
#apDiv2 {
	position: absolute;
	width: 214px;
	height: 52px;
	z-index: 1;
	left: 128px;
	top: 95px;
	font-size: 24px;
}
#apDiv3 {
	position: absolute;
	width: 200px;
	height: 49px;
	z-index: 2;
	left: 435px;
	top: 97px;
	font-size: 24px;
}
#apDiv1 div table {
	font-size: 12px;
}
#apDiv1 div table tr td {
	font-size: 18px;
	text-align: center;
}
</style>
</head>

<body>
<div id="apDiv1">
  <div align="center">
  <table width="824" height="176">
      <tr>
        <td width="120">Requistion_No.</td>
        <td width="107">Employee Id</td>
        <td width="106">Item Name</td>
        <td width="68">Quantity</td>
        <td width="136">Department Name</td>
        <td width="68">Type</td>
        
      </tr>
        <?php
  $sql="select * from orders where status='approve' AND type='nonconsumable'";
  $res=mysql_query($sql);
  while($row=mysql_fetch_array($res))
  {
  $item_id=$row['item_id'];
  $sql1="select * from nonconsumable where id=$item_id";
  $res1=mysql_query($sql1);
  while($row1=mysql_fetch_array($res1))
  {
	  $item=$row1['name'];
      }
  ?>
      <tr>
        <td><?php echo $row['requistion_no'] ?></td>
        <td><?php echo $row['employee_id'] ?></td>
       <td><?php echo $item; ?></td>
        <td><?php echo $row['quantity'] ?></td>
         <td><?php echo $row['department_name'] ?></td>
          <td><?php echo $row['type'] ?></td>
        
      </tr>
      <?php
      }
	  ?>
    </table>
 
  </div>
</div>
</body>
</html>