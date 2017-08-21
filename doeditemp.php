<?php
include "conn.php";
$q=$_POST['fullname'];

$w=$_POST['emailid'];
$c=$_POST['id'];
$d="update empregisterform set fullname='$q',emailid='$w' where id =$c";
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