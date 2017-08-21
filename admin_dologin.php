<?php
include 'conn.php';
session_start();
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

		header("refresh:1;url=adminlogin.php");
		echo"denied";
}



}

?>