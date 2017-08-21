<?php
	include "conn.php";
	session_start();
$id=$_SESSION['id'];
	?>
    <?php

	$rah=$_GET["id"];
	$sql=mysql_query("delete from orders where id=$rah and employee_id=$id");
	 
	if($sql>0)
	{
		header("location:myorders1.php");
	}

 ?>