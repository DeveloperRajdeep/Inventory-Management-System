<?php
include 'conn.php';
?>
<?php

$b=$_GET['b'];
  $sql="delete from orders where id='$b'";
  $delete=mysql_query($sql);
  if($delete==1)
	{
	echo"data deleted";
	}
	?>