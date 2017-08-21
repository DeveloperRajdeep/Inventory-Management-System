<?php
include 'conn.php';
session_start();
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

		header("refresh:2;url=login.php");
		echo"denied";
}



}

?>