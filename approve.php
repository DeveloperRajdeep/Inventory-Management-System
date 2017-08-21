<?php
include 'conn.php';
?>
<?php
if(isset($_GET['a']))
{
	$approve=$_GET['a'];
	$connect=mysql_query("update empregisterform set status=1 where id=$approve");
	if($connect==1)
	{
		echo "approved";	
	}
	else
	{
		echo "error";
	}
}	
?>