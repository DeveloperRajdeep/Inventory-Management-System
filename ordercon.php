<?php

include 'conn.php';
session_start();
$id=$_SESSION['id'];

if($id==null)
{
	header("location:login.php");
}
else
{
$sql="select fullname,department,designation from empregisterform where employeeid=$id";
$res=mysql_query($sql);
$rs=mysql_fetch_array($res);
}
date_default_timezone_set('Asia/Calcutta');

if(isset($_GET['submit']))
{
$requestion=$_GET['requistion_no'];
$item_name= $_GET['item_name'];
$quantity= $_GET['quantity'];
$department=$_GET['department'];
 $date=date('d-m-Y');
 $time=date('h-i-s');
$consumable="nonconsumable";
$total = count($item_name)/count($quantity);
for($i=0;$i<count($item_name) && $i<count($quantity);$i++)
{
$item=$item_name[$i+1];
$items=substr($item,0,-2);
$qty=$quantity[$i+1];
$sql=mysql_query("insert into orders(requistion_no,employee_id,item_id,quantity,department_name,type,date,time) values ('$requestion', $id, '$items', $qty, '$department','$consumable','$date','$time')");
$time=date('h-i-s');

$sql1="select * from nonconsumable where id='$items'";
$result1=mysql_query($sql1);
while($row1=mysql_fetch_array($result1))
{   
   $qunt=$row1["quantity"]-$qty;
   $sql2=mysql_query("update nonconsumable set quantity=$qunt where id=$items");

}


}
if($sql>0)
 {
?>
<link rel="stylesheet" href="css/font-awesome.min.css">
<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	width:80%;
	height:auto;
	z-index:1;
	left:10%;
	top:20px;
}

@media print {
.noPrint {
    display:none;
  }
}
-->
</style>
<div id="apDiv1">
<table width="100%" border="0" align="center">
  <tr>
    <td align="right" width="600">
	<?php $url=explode("?",$_SERVER['REQUEST_URI']); $a=$url[1];?>
	<a title="Save as PDF" href="html2pdf1.php?<?php echo $a ?>" target="_blank" class="noPrint" style="text-decoration:none;color:#222;font-size:20px"><i class="fa fa-file-pdf-o"></i></a>&nbsp;
	<a title="Click to Print" href="#" onclick="window.print()" class="noPrint" style="text-decoration:none;color:#222;font-size:20px"><i class="fa fa-print"></i></a>
	</td>
  </tr>
  <tr>
    <td style="text-align:center; font-size:20px; font-weight:bold; font-family:Arial, Helvetica, sans-serif">National Informatic Center</td>
  </tr>
</table>
<table width="100%" border="0" align="center">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align:center;">Assam State Center, Guwahati</td>
  </tr>
  <tr>
    <td style="text-align:center;">Jayanagar Chariali,Beltola,Guwahati-781028</td>
  </tr>
  <tr>
    <td style="text-align:center;">Tel:0361-2226123</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" align="center">
  <tr>
    <td  style="text-align:center; font-size:14px;text-decoration:underline">REQUISTION FORM</td>
  </tr>
  <tr>
    <td  style="text-align:center;">[ <?php echo $consumable ?> ]</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" align="center">
  <tr>
    <td width="120">Place of requistion:</td>
    <td width="50">Dibrugarh</td>
    <td width="120">&nbsp;</td>
    <td width="120">&nbsp;</td>
    <td width="120" style="text-align:right;">Date of requistion:</td>
    <td width="50" style="text-align:right;"><?php echo $date ?></td>
  </tr>
</table>
<table width="100%" border="1" cellspacing="0" align="center">
  <tr>
    <td width="50">SL. No.</td>
    <td width="180" style="text-align:center;">Item Name</td>
    <td width="80">Quantity Demanded</td>
    <td width="80">Quantity Status</td>
    <td width="80">Quantity Issued</td>
    <td width="90" style="text-align:center;">Remark</td>
  </tr>
      <?php
	  $j=1;
	  for($i=0;$i<count($item_name) && $i<count($quantity);$i++)
      {
       $item=$item_name[$i+1];
       $items=substr($item,0,-2);
       $qty=$quantity[$i+1];
	   $sql1=mysql_query("select * from nonconsumable where id='$items'");
	   while($r=mysql_fetch_array($sql1))
	   {
		 $ite=$r['name'];
	   }
      
       ?>
       <tr>
        <td><?php echo $j ?> </td>
        <td><?php echo $ite ?></td>
        <td><?php echo $qty ?></td>
        <td>Pending</td>
        <td>Pending</td>
        <td>&nbsp;</td>
  </tr>
   <?php
	  $j++;
	  }
	  ?>
</table>
<table width="100%" border="0" align="center">
  <tr>
    <td width="200">&nbsp;</td>
    <td width="400">&nbsp;</td>
  </tr>
  <tr>
    <td>Receiving Officer Name:</td>
    <td><?php echo $rs[0] ?></td>
  </tr>
  <tr>
    <td>Employee Code:</td>
    <td><?php echo $id ?></td>
  </tr>
  <tr>
    <td>Designation:</td>
    <td><?php echo $rs[2]?></td>
  </tr>
  <tr>
    <td>Department:</td>
    <td><?php echo $rs[1]?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" align="center">
  <tr>
    <td width="400">Signature of the receiving official</td>
    <td width="200" style="text-align:right;">Approval of Authority</td>
  </tr>
  <tr>
    <td colspan="2"><hr/></td>
  </tr>
</table>
<table width="100%" border="0" align="center">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="420" style="font-size:13px;">Received item from Serial No.______to Serial No.______in good condition</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="170" style="text-align:right;font-size:13px" >Signature of Receiving Official</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" align="center">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="420" style="font-size:13px;">Received item from Serial No.______to Serial No.______in good condition</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td></td>
  </tr>
  <tr>
    <td width="470" style="font-size:13px;">Requistion No.: <?php echo $requestion ?></td>
    <td width="170" style="text-align:right;font-size:13px">Signature of I/C Stores</td>
  </tr>
  <tr>
    <td colspan="2"><hr/></td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td></td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td></td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td></td>
  </tr>
</table>
</div>

<?php
 }
 else
 {
	echo "ERROR";
 }

}

?>



