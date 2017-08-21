<?php
include 'conn.php';
?>
<?php
if(isset($_GET['a']))
{
	$approve=$_GET['a'];
	$date=date('d-m-Y');
	$connect=mysql_query("update orders set status='approve',aprvdate='$date' where id=$approve");
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