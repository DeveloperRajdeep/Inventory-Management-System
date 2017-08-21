<?php
	include "conn.php";

	$id=$_GET["id"];
	$sql=mysql_query("update notification set status='checked' where id=$id");
	if($sql>0)
	{
		header("location:notification.php");
	}

 ?>