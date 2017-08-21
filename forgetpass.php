<?php include'conn.php';
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">

</style>
</head>

<body>
  <form action="forgetpass.php" method="post">
    <input type="submit" name="submit2" id="button" value="Forget Password??" />
  </form>
 <?php if(isset($_POST['submit2']))
 {
 echo '<form action=forgetpass.php method=post>';
 echo "<span>Employee Id:</span><input type='text' id='txt' name='psrd' >";
 echo'<button type=submit name=submit3 id=buttons3>search</button>';
 echo'</form>';
echo'<form action=forgetpass.php method=post>';

  echo'<button type=submit name=submit_3 id=buttons_3>cancel</button>';
 echo'</form>';

 }?>
 <?php
   if(isset($_POST['submit_3']))
   {header('location:forgetpass.php');
   }
   ?>

 <?php if(isset($_POST['submit3']))
 {
 $name=$_POST['psrd'];
 $sql3=mysql_query("select * from empregisterform where employeeid='$name' and status=1");
 if(mysql_num_rows($sql3)>=1)
 {while($res=mysql_fetch_array($sql3))
 {$question=$res['securityques'];
 echo '<form action=forgetpass.php method=post>';
 echo'<span id=ques1>security question :</span><span id=ques>'.$question.'</span>'; 
echo'<span id=ans>enter your answer:</span><input type=text name=answer id=ans1>';
echo'<button type=submit name=submit4 id=buttons4>enter</button>';
echo'</form>';
echo'<form action=forgetpass.php method=post>';
 echo'<button type=submit name=submit_4 id=buttons_4>cancel</button>';
 echo'</form>';
 }
 }
 }?>
 <?php
   if(isset($_POST['submit_4']))
   {header('location:forgetpass.php');
   }
   ?>
<?php  if(isset($_POST['submit4']))
 {
 $answer1=$_POST['answer'];
 $sql4=mysql_query("select * from empregisterform where securityans='$answer1' and status=1 ");
 if(mysql_num_rows($sql4)>=1)
 {
 echo'<span id=newss>Password must be between 5 to 10 characters which contain at least one lowercase letter ,one uppercase letter , and one special character</span><br/>';
	 echo '<form action=forgetpass.php method=post >';
 		echo'<input type=hidden name=hide value='.$answer1.'>';
		echo'<span id=n_ew>enter your new password:</span><input type=text name=new1 id=button-1 class=txt1 onkeyup=valid_password(this) onblur=valid_password1(this)/> <span id=psword></span><br /><br />';
		echo'<span id=ne_w>confirm your password:</span><input type=text name=new2 id=button-2 class=txt2 onkeyUp="confirm_password(this)"  onblur=confirm_password1(this) onkeydown=confirm_password2(this) required=required /><span id=confirm1></span>';
	  echo'<button type=submit name=submit5 id=buttons6>enter</button>';
echo'</form>';
echo'<form action=forgetpass.php method=post>';
 echo'<button type=submit name=submit_5 id=buttons_6>cancel</button>';
 echo'</form>';
 }
 }
 ?><?php
 if(isset($_POST['submit_5']))
 {echo '<div class=""><span class=infoin>you cancelled</span></div>';
 header('refresh:3;url=forgetpass.php');
   }
   ?>
<?php if(isset($_POST['submit5']))
{ $newpass=$_POST['new1'];
$hides=$_POST['hide'];

$sql7=mysql_query("update empregisterform set password='$newpass' where securityans='$hides'");

if($sql7==true)
{
	echo '<div class=""><span class=infoin>password updated</span></div>';
 header('refresh:4;url=forgetpass.php');

}
else{echo'<div class=""><span class=infoin >passsword updation failed</span></div>';
 header('refresh:4;url=forgetpass.php');
}
}
	  
 
 
?>
</div>
</div>
</body>
</html>
