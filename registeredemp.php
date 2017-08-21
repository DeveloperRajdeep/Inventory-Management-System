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
	font-size: 16px;
}
#apDiv1 div table tr td {
	font-size: 18px;
	text-align: center;
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
  
    <table width="811"  style="border-style: inset; height="176">
      <tr>
        <td width="94">Full name</td>
        <td width="128">Employee Id</td>
        <td width="141">Department</td>
        <td width="124">Designation</td>
        <td width="134">Email Id</td>
       <td width="68">Edit</td>
       <td width="82">Delete</td>
       
      </tr>
        <?php
  $sql="select * from empregisterform where status=1";
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
        <td width="68"><a href="editemp.php?a=<?php echo $row["id"] ?>">EDIT</a></td>
        <td width="82"><a href="delemp.php?b=<?php echo $row["id"]?>">DELETE</a></td>
      </tr>
      <?php
      }
	  ?>
    </table>
 
  </div>
</div>
</body>
</html>