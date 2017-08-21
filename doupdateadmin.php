<?php
include "conn.php";
$q=$_POST['username'];

$w=$_POST['password'];
$c=$_POST['id'];
$d="update admin set username='$q',password='$w' where id =$c";
$sql=mysql_query($d);
if ($sql==1)
{
echo "update successful";
}
else
{
echo"error";
}
?>