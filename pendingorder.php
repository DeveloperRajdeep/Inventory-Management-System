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
    <table width="824" style="border-style: inset;" height="176">
      <tr>
        <td width="118">Requistion_No.</td>
        <td width="104">Employee Id</td>
        <td width="102">Item Name</td>
        <td width="67">Quantity</td>
        <td width="133">Department Name</td>
        <td width="131">Type</td>
        <td width="76">Approve</td>
        <td width="57">Deny</td>
      </tr>
      <?php
  $sql="select * from orders where status='pending'  AND type='consumable'";
  $res=mysql_query($sql);
  while($row=mysql_fetch_array($res))
  {
	  $item_id=$row['item_id'];
  $sql1="select * from consumable where id='$item_id'";
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
        <td width="76"><a href="approve1.php?a=<?php echo $row["id"] ?>">APPROVE</a></td>
        <td width="57"><a href="deny1.php?b=<?php echo $row["id"]?>">DENY</a></td>
      </tr>
      <?php
      }
	  ?>
    </table>
  </div>
</div>
</body>
</html>
