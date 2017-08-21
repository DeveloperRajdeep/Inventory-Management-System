<?php
include "conn.php";
$c=$_GET['a'];
$sql="select * from empregisterform where id='$c'";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result))
{
$q=$row['fullname'];
$w=$row['emailid'];
}
?>
<html>
<body>
<form method="post" action="doeditemp.php">

FullName<input type="text" name="fullname" value="<?php echo $q ?>"><br><br>
Email ID<input type="text" name="emailid" value="<?php echo $w ?>"><br><br>
<input type="hidden" name="id" value="<?php echo $c ?>">
<input type="submit" name="submit" value="Update">
</form>
</body>
  </html> 
