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
	width: 839px;
	height: 279px;
	z-index: 1;
	left: 8px;
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
  
    <table width="846" style="border-style: inset; height="176">
      <tr>
        <td width="119">Full name</td>
        <td width="111">Employee Id</td>
        <td width="140">Department</td>
        <td width="134">Designation</td>
        <td width="137">Email Id</td>
       <td width="95">Approve</td>
       <td width="92">Deny</td>
       
      </tr>
        <?php
  $sql="select * from empregisterform where status=0";
  $res=mysql_query($sql);
  while($row=mysql_fetch_array($res))
  {
  ?>
      <tr>
        <td><?php echo $row['fullname'] ?></td>
        <td><?php echo $row['employeeid'] ?></td>
        <td><?php echo $row['department'] ?></td>
        <td><?php echo $row['designation'] ?></td>
        <td><?php echo $row['emailid'] ?></td>
        <td width="95"><a href="approve.php?a=<?php echo $row["id"] ?>">APPROVE</a></td>
        <td width="92"><a href="deny.php?b=<?php echo $row["id"]?>">DENY</a></td>
      </tr>
      <?php
      }
	  ?>
    </table>
 
  </div>
</div>
</body>
</html>