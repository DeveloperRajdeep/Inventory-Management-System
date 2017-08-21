
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
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<script type="text/javascript">
$(function(){
$(".search").keyup(function() 
{ 
var searchid = $(this).val();
var dataString = 'search='+ searchid;
if(searchid!='')
{
	$.ajax({
	type: "POST",
	url: "search1.php",
	data: dataString,
	cache: false,
	success: function(html)
	{
	$("#result").html(html).show();
	}
	});
}return false;    
});

jQuery("#result").live("click",function(e){ 
	var $clicked = $(e.target);
	var $name = $clicked.find('.name').html();
	var decoded = $("<div/>").html($name).text();
	$('#searchid').val(decoded);
});
jQuery(document).live("click", function(e) { 
	var $clicked = $(e.target);
	if (! $clicked.hasClass("search")){
	jQuery("#result").fadeOut(); 
	}
});
$('#searchid').click(function(){
	jQuery("#result").fadeIn();
});
});
</script>
<style type="text/css">
body{ 
		font-family:Tahoma, Geneva, sans-serif;
		font-size:14px;
	}
	.content{
		width:300px;
		margin:0 auto;
	}
	#searchid
	{
		width:150px;
		border:solid 1px #000;
		padding:10px;
		font-size:14px;
		height:25px;
	}
	#result
	{
		position:absolute;
		width:150px;
		padding:0px;
		display:none;
		margin-top:-1px;
		border-top:0px;
		overflow:hidden;
		border:1px #CCC solid;
		background-color: white;
		z-index:99999;
		
	}
	.show
	{
		padding:10px; 
		border-bottom:1px #999 dashed;
		font-size:15px; 
		height:20px;
	}
	.show:hover
	{
		background:#4c66a4;
		color:#FFF;
		cursor:pointer;
	}
#apDiv1 {
	position: absolute;
	width: 667px;
	height: 150px;
	z-index: 1;
	left: 5px;
	top: 64px;
}
#apDiv1 table {
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
#apDiv2 {
	position:absolute;
	width:681px;
	height:220px;
	z-index:2;
	top: 8px;
	left: 3px;
}
#apDiv3 {
	position:absolute;
	width:657px;
	height:53px;
	z-index:2;
	left: 10px;
	top: 7px;
}
#apDiv4 {
	position:absolute;
	width:414px;
	height:23px;
	z-index:1;
	top: 0px;
	left: 1px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
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
#apDiv5 {
	position:absolute;
	width:224px;
	height:38px;
	z-index:2;
	left: 428px;
	top: 7px;
}
</style>
</head>

<body>
<div id="apDiv2">
<div id="apDiv1">
    <table width="663" style="border-style: inset;" height="148">
      <tr>
        <td width="113">Serial No.</td>
        <td width="292">Name of the Item</td>
        <td width="158">Available</td>
        <td width="117">Date</td>
        <td width="105">Time</td>
      </tr>
     <?php
  if(isset($_GET['name']))
  {
	$name=$_GET['name'];
	$sql="select * from consumable where quantity!=0 AND name='$name'";  
  }
  else
  {
  $sql="select * from consumable where quantity!=0";
  }
  $res=mysql_query($sql);
  $j=1;
  while($row=mysql_fetch_array($res))
  {
  ?>
     
      <tr>
        <td><?php echo $j++ ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['quantity'] ?></td>
        <td><?php echo $row['date'] ?></td>
        <td><?php echo $row['time'] ?></td>
      </tr>
      <?php
      }
	  ?>
    </table>
  </div>
<div id="apDiv3">
  <div id="apDiv4">Consumable Items In Stock</div>
  <div class="content" style="margin-left:450px;;">
     <input type="text" class="search"
     <?php if(isset($_GET['name']))
  {
	$name=$_GET['name'];
 ?>
  
  value="<?php echo $name ?>"
  
<?php	
  }
	?>id="searchid" placeholder="Search items" />&nbsp; &nbsp;<br /> 
     <div id="result">
</div>
</div>
</div>
</div>
</div>
</body>
</html>
