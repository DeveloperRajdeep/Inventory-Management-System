<?php
include 'conn.php';
?>
<?php
session_start();
if(isset($_POST['register']))
{
	$name=$_POST['fullname'];
	$employeeid=$_POST['employeeid'];
	$department=$_POST['department'];
	$desig=$_POST['designation'];
	$email=$_POST['emailid'];
	$password=$_POST['password'];
	$confirmpass=$_POST['confirmpass'];
	$securityques=$_POST['securityques'];
	$securityans=$_POST['securityans'];
	
	
$sql="insert into empregisterform (fullname,employeeid,department,designation,emailid,password,securityques,securityans) values('$name','$employeeid','$department','$desig','$email','$password','$securityques','$securityans')";
	
	
$res=mysql_query($sql);
if($res=1)
{
	$_SESSION['fullname']=$name;
	echo "Successfull Registered";
	echo "You will be able to login within 24 Hours";
	header("refresh:5;url=login.php");
}
	else
	{
echo "Registration Failed";

}
}
?>