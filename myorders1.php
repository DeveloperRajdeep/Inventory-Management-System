<?php
include 'conn.php';
error_reporting(0);
session_start();
$id=$_SESSION['id'];
if($id==null)
{
	header("location:login1.php");
}
else
{
$sql="select fullname from empregisterform where employeeid=$id";
$res=mysql_query($sql);
$rs=mysql_fetch_array($res);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#apDiv90 {
	position: absolute;
	width: 1026px;
	height: 146px;
	z-index: 1;
	left: 4px;
	top: 81px;
}
table {
	font-family: Verdana, Geneva, sans-serif;
	text-align: center;
	font-size: 14px;
}
table, td, th {
    border: 5px solid green;
}

td {
    background-color: #099;
    color: white;
}
#apDiv1 {
	position:absolute;
	width:1027px;
	height:226px;
	z-index:2;
	left: 3px;
	top: 4px;
}
#apDiv2 {
	position:absolute;
	width:981px;
	height:38px;
	z-index:1;
	left: 18px;
	top: 16px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 20px;
	text-align: center;
	color: #ffffff;
	border: 1px #000;
	border: 1px solid #F1F1F1;
	-moz-border-radius: 5px;
	border-radius: 15px;
	-moz-box-shadow: 10px 10px 24px #000000;
	-webkit-box-shadow: 10px 10px 24px #000000;
	box-shadow: 10px 10px 24px #000000;
	background-color: #136EAC;
}
</style>
<script>
      function cancelOrder(){
        if(confirm("Do you want to delete?")==false)
          return false;
      }
      </script>
</head>

<body>
 <div id="apDiv90">
    <table width="1021"  style="border-style: inset;" height="140">
      <tr>
        <td width="76" height="56">Serial No.</td>
        <td width="115">Requistion No.</td>
        <td width="185">Item Name</td>
        <td width="139">Item Quantity</td>
        <td width="150">Quantity Type</td>
        <td width="96">Status</td>
        <td width="101">Order Date</td>
        <td width="123">Order Aprv Date</td>
        <td width="123">Action</td>
      </tr>
       <?php
	   $j=1;
	    $sql10="select * from orders where employee_id='$id'";
		$res10=mysql_query($sql10);
		while($row101=mysql_fetch_array($res10))
		{
		
		 $typee=$row101['type'];
		 $item_id=$row101['item_id'];
		 $i = $row101['id'];
		 $b=$j++;
	 if($typee=='consumable'){
	
	 
	
	
 	 $sql11="select * from consumable where id='$item_id'";
  	 $res11=mysql_query($sql11);
     while($row11=mysql_fetch_array($res11))
     {
	    $item=$row11['name'];
     }
 	 ?>
  
      <tr>
        <td height="34"><?php echo $b ?></td>
        <td><?php echo $row101['requistion_no'] ?></td>
        <td><?php echo $item; ?></td>
        <td><?php echo $row101['quantity'] ?></td>
        <td><?php echo $row101['type'] ?></td>
        <td><?php echo $row101['status'] ?></td>
        <td><?php echo $row101['date'] ?></td>
        <td><?php echo $row101['aprvdate'] ?></td>
        <td><a onclick="return cancelOrder();" href="cancelorder.php?id=<?php echo $i ?>">Cancel</a></td>
      </tr>
       <?php
      
		 }else{
			 
		
	
 	 $sql11="select * from nonconsumable where id='$item_id'";
  	 $res11=mysql_query($sql11);
     while($row11=mysql_fetch_array($res11))
     {
	    $item=$row11['name'];
     }
 	 ?>
  
      <tr>
        <td height="34"><?php echo $b ?></td>
        <td><?php echo $row101['requistion_no'] ?></td>
        <td><?php echo $item; ?></td>
        <td><?php echo $row101['quantity'] ?></td>
        <td><?php echo $row101['type'] ?></td>
        <td><?php echo $row101['status'] ?></td>
        <td><?php echo $row101['date'] ?></td>
        <td><?php echo $row101['aprvdate'] ?></td>
        <td><a onclick="return cancelOrder();" href="cancelorder.php?id=<?php echo $i ?>">Cancel</a></td>
      </tr>
       <?php
      }
	  }
			 
		 
	  ?>
    </table>
    </div>
 <div id="apDiv1">
   <div id="apDiv2">My Orders Items</div>
 </div>
</body>
</html>
