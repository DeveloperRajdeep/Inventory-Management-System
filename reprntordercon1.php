<?php
error_reporting(0);
include 'conn.php';
session_start();
$id=$_SESSION['id']; 
$req_no=$_GET['bill_no'];
$req_type=$_GET['bn'];
$sql1="select * from orders where requistion_no='$req_no' and type='$req_type' and employee_id=$id";
$result1=mysql_query($sql1);
if(mysql_num_rows($result1)>0)
{
while($row1=mysql_fetch_array($result1))
{
$x=$row1['date'];
}
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
	<a title="Save as PDF" href="html2pdf2.php?<?php echo $a ?>" target="_blank" class="noPrint" style="text-decoration:none;color:#222;font-size:20px"><i class="fa fa-file-pdf-o"></i></a>&nbsp;
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
    <td  style="text-align:center;">[ <?php echo $req_type; ?> ]</td>
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
    <td width="50" style="text-align:right;"><?php echo $x; ?></td>
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
$sql="select * from orders where requistion_no='$req_no' and type='$req_type' and employee_id=$id";
$result=mysql_query($sql);
$j=1;
while($row=mysql_fetch_array($result))
{
$q=$row['id'];
$w=$row['requistion_no'];
$r=$row['item_id'];
$t=$row['quantity'];
$y=$row['department_name'];
$u=$row['type'];
$i=$row['status'];
$x=$row['date'];
if($u=='consumable')
{
$sql3=mysql_query("select * from consumable where id=$r");
while($row1=mysql_fetch_array($sql3))
{
	$q1=$row1['name'];
	
}
}
else if($u=='nonconsumable')
{
$sql3=mysql_query("select * from nonconsumable where id=$r");
while($row1=mysql_fetch_array($sql3))
{
	$q1=$row1['name'];
}
}
?>

<tr>
<td><?php echo $j++ ?></td>
<td><?php echo $q1 ?></td>
<td><?php echo $t ?></td>
<td><?php echo $i ?></td>
<td></td>
<td></td>
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
    <td></td>
  </tr>
  <tr>
    <td>Employee Code:</td>
    <td><?php echo $id ?></td>
  </tr>
  <tr>
    <td>Designation:</td>
    <td></td>
  </tr>
  <tr>
    <td>Department:</td>
    <td></td>
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
    <td width="470" style="font-size:13px;">Requistion No.: <?php echo $w; ?></td>
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
echo "NRF";
	 
	 }
 ?>





