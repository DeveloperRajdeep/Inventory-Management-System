<?php 
include 'conn.php';
?>
<?php
 date_default_timezone_set('Asia/Calcutta');
if(isset($_POST['add']))
{
	 $quanname=$_POST['qname'];
 $noquantity=$_POST['noquan'];
  $date=date('d-m-y');
 $time=date('h-i-s');
 
 $r=mysql_query("select * from nonconsumable where name='$quanname'");
 if(mysql_num_rows($r)>0)
 {
	 $sql=mysql_query("update nonconsumable set quantity='$noquantity',date='$date',time='$time' where name='$quanname'");
	 $sql1=mysql_query("insert into his_noncon(name,quantity,date,time) values('$quanname','$noquantity','$date','$time')");
$time=date('h-i-s');
 }
 else
 {
 
 $sql=mysql_query("insert into nonconsumable(name,quantity,date,time) values('$quanname','$noquantity','$date','$time')");
 $time=date('h-i-s');

$sql1=mysql_query("insert into his_noncon(name,quantity,date,time) values('$quanname','$noquantity','$date','$time')");
$time=date('h-i-s');
 }
	
if($sql>0 && $sql1>0)
{
	echo "ITEM SUCCESSFULLY ADDED";
	header("refresh:1;url=additemnonconsumable.php");
}
else
{
	echo "ERROR";
}
}

?>