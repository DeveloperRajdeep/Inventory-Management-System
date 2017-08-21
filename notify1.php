<?php
session_start();
include "conn.php";
$id=$_SESSION["id"];
$item_id=$_POST['itm_id'];
$sql=mysql_query("select * from nonconsumable where id='$item_id'");
while($row=mysql_fetch_array($sql))
{
  $name=$row["name"];
}
$sql2=mysql_query("select * from empregisterform where employeeid='$id'");
while($row2=mysql_fetch_array($sql2))
{
  $username=$row2["fullname"];
}
$message="The item $name is out of stock";
$sql1=mysql_query("insert into notification (message, e_id, frm) values('$message','$id','$username')");
if($sql1>0)
{
	echo "Notification has been sent!";
}
else
{
	echo "Notification sending failed!";
}
?>