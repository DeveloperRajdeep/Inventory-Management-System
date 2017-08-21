<?php
include 'connect.php';
?>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
$eno=$_POST['eno'];
$ename=$_POST['ename'];
$p=mysql_query("insert into employee(eno,ename)values('".$eno."','".$ename."');
if($p)
print("Data saved");
else
print("data not saved");
}
?>