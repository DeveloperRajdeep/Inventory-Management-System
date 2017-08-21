
<?php
include "conn.php";

$b=$_GET['b'];
  $sql="delete from empregisterform where id='$b'";
  $delete=mysql_query($sql);
  if($delete==1)
	{
	echo"data deleted";
	}
	?>