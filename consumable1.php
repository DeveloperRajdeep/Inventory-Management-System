<?php
include 'conn.php';
session_start();
$id=$_SESSION['id'];
if($id==null)
{
	header("location:login1.php");
}
else
{
$sql="select * from empregisterform where employeeid=$id";
$res=mysql_query($sql);
$rs=mysql_fetch_array($res);
}
$a=$_GET['consumableitem'];
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CONSUMABLE ORDER</title>
<script src="jquery-1.9.0.min.js"></script>
<script src="jquery-1.9.0.min.js"></script>
<script language="javascript" type="text/javascript">
function get_subcategory(c_id)
{
    var data=c_id;
	var result=data.split(",");
	var i_id=result[0];
	var s_no=result[1];
    $.ajax({
       type: "POST",
       url: "subcategory.php", /* The country id will be sent to this file */
       beforeSend: function () {
        },
       data: "c_id="+i_id,
       success: function(msg){

		 var data=msg;
		 var res=data.split(";");
	     var opt=res[0];
	     var val=res[1];
		 $("#subcategory"+s_no).html(opt);
		 if($("#subcategory"+s_no).val()<1)
		 {
			 $("#report"+s_no).html("<button type='button' id='itm_id'>Report<input id='report' type='text' style='display:none' value='"+i_id+"' ></button>");
             $("#itm_id").click(function(){
				var  itm_id=$('#report').val();
                $.ajax({
                type:"post",
                url:"notify.php",
                data:"itm_id="+itm_id,
		        success: function(data)
                {
				  alert(data);
		        },
	            });
		     })
		 }
		 else
		 {
			 $("#report"+s_no).html("<button id='itm_id' type='button' style='display:none'>Report<input id='report' type='text' style='display:none' value='"+i_id+"' ></button>");
		 }
       
		 
		 if(val==0)
		 {
			$("#quantity"+s_no).attr("disabled",true); 
			 
		 }
		 else
		 {
			$("#quantity"+s_no).attr("disabled",false); 
			 
		 } 
		 
       }
       });
} 
       

</script>


<style type="text/css">
body
{
background-image: url(images/beige_paper.png);	
}
#apDiv1 {
	position: absolute;
	width: 100%;
	height: auto;
	z-index: 1;
	position: absolute;
	width: 1352px;
	height: 754px;
	z-index: 1;
	left: 2px;
	top: -1px;
}
#apDiv2 {
	position: absolute;
	width: 1305px;
	height: 100px;
	z-index: 1;
	left: 25px;
	top: 12px;
	border-radius: 5px;
	box-shadow: 0px 10px 20px;
	background-image: url(images/bdy-back.jpg);
}
#apDiv3 {
	position: absolute;
	width: 582px;
	height: 46px;
	z-index: 2;
	left: 750px;
	top: 129px;
}
</style>

<style type="text/css">
#apDiv4 {
	position: absolute;
	width: 597px;
	height: 55px;
	z-index: 1;
	font-family: "Agency FB";
	font-size: 10px;
	left: 9px;
	top: -7px;
	color: #0000FF;
	-moz-box-shadow: 0 0 5px 5px #888;
	-webkit-box-shadow: 0 0 5px 5px#888;
	text-shadow: 1px 0 1px #DDD,
               2px 0 2px #c9c9c9,
                3px 0 3px #EEE,
                4px 0 4px  #b9b9b9,
                5px 0 5px #FFF,
                6px 1px rgba(0,0,0,.1),
               0 0 5px rgba(0,0,0,.1),
               0 1px 3px rgba(0,0,0,.3),
               0 3px 5px rgba(0,0,0,.2),
               0 5px 10px rgba(0,0,0,.25),
               0 10px 10px rgba(0,0,0,.2),
               0 20px 20px rgba(0,0,0,.15);
}
#apDiv5 {
	position: absolute;
	width: 417px;
	height: 28px;
	z-index: 2;
	left: 87px;
	top: 63px;
	font-family: Arial, Helvetica, sans-serif;
	text-align: center;
	font-size: 24px;
	color:#0000FF;
	-moz-box-shadow: 0 0 5px 5px #888;
	-webkit-box-shadow: 0 0 5px 5px#888;
	text-shadow:  1px 0 1px #DDD,
               2px 0 2px #c9c9c9,
                3px 0 3px #EEE,
                4px 0 4px  #b9b9b9,
                5px 0 5px #FFF,
                6px 1px rgba(0,0,0,.1),
               0 0 5px rgba(0,0,0,.1),
               0 1px 3px rgba(0,0,0,.3),
               0 3px 5px rgba(0,0,0,.2),
               0 5px 10px rgba(0,0,0,.25),
               0 10px 10px rgba(0,0,0,.2),
               0 20px 20px rgba(0,0,0,.15);
}
#apDiv6 {
	position: absolute;
	width: 344px;
	height: 84px;
	z-index: 3;
	left: 10px;
	top: 128px;
	font-size: 18px;
	font-weight: bold;
	color: #777;
	color: #FF4747;
	border: 1px #000;
	border: 1px solid #F1F1F1;
	-moz-border-radius: 5px;
	border-radius: 15px;
	-moz-box-shadow: 10px 10px 24px #000000;
	-webkit-box-shadow: 10px 10px 24px #000000;
	box-shadow: 10px 10px 24px #000000;
	background-image: url(images/beige_paper.png);
}
#apDiv7 {
	position: absolute;
	width: 402px;
	height: 115px;
	z-index: 4;
	left: 405px;
	top: 308px;
}
#apDiv8 {
	position: absolute;
	width: 842px;
	height: 39px;
	z-index: 2;
	left: 368px;
	top: 235px;
	color: #777;
	color: #FF4747;
	border: 1px #000;
	border: 1px solid #F1F1F1;
	-moz-border-radius: 5px;
	border-radius: 15px;
	-moz-box-shadow: 10px 10px 24px #000000;
	-webkit-box-shadow: 10px 10px 24px #000000;
	box-shadow: 10px 10px 24px #000000;
	background-image: url(images/beige_paper.png);
}
#apDiv9 {
	position: absolute;
	width: 339px;
	height: 27px;
	z-index: 1;
	text-align: left;
	font-family: "Times New Roman", Times, serif;
	font-size: 18px;
	top: 8px;
	left: 11px;
}
#apDiv10 {
	position: absolute;
	width: 187px;
	height: 27px;
	z-index: 2;
	left: 645px;
	top: 5px;
	text-align: center;
	font-family: "Times New Roman", Times, serif;
	font-size: 18px;
}
#apDiv11 {
	position: absolute;
	width: 923px;
	height: 407px;
	z-index: 4;
	left: 325px;
	top: 314px;
	color: #777;
	color: #FF4747;
	border: 1px #000;
	border: 1px solid #F1F1F1;
	-moz-border-radius: 5px;
	border-radius: 15px;
	-moz-box-shadow: 10px 10px 24px #000000;
	-webkit-box-shadow: 10px 10px 24px #000000;
	box-shadow: 10px 10px 24px #000000;
	background-image: url(images/beige_paper.png);
}
#apDiv12 {
	position: absolute;
	width: 132px;
	height: 26px;
	z-index: 1;
	top: 10px;
	left: 10px;
	text-align: center;
	font-size: 18px;
	font-family: "Times New Roman", Times, serif;
}
#apDiv13 {
	position: absolute;
	width: 176px;
	height: 27px;
	z-index: 2;
	left: 160px;
	top: 9px;
	text-align: center;
	font-size: 18px;
}
#apDiv14 {
	position: absolute;
	width: 183px;
	height: 29px;
	z-index: 3;
	left: 464px;
	top: 8px;
	text-align: center;
	font-size: 18px;
}
#apDiv15 {
	position: absolute;
	width: 170px;
	height: 28px;
	z-index: 4;
	left: 667px;
	top: 8px;
	text-align: center;
	font-size: 18px;
}
#apDiv16 {
	position: absolute;
	width: 837px;
	height: 340px;
	z-index: 5;
	left: 9px;
	top: 58px;
}
#apDiv17 {
	
	width: 100%;
	height: 59px;
	z-index: 3;
	left: 267px;
	top: 412px;
}
#apDiv18 {
	
	width: 78px;
	height: 33px;
	z-index: 1;
	top: 9px;
	left: 44px;
}
#apDiv19 {
	
	width: 121px;
	height: 32px;
	z-index: 2;
	left: 146px;
	top: 7px;
}
#apDiv20 {
	width: 99px;
	height: 37px;
	z-index: 5;
	margin-left: 137px;
	top: 182px;
}
#apDiv1 #apDiv2 #apDiv4 p {
	text-align: center;
}
#apDiv1 #apDiv2 #apDiv4 p {
	font-weight: bold;
}
#apDiv1 #apDiv2 #apDiv4 p {
	font-weight: normal;
}
#apDiv1 #apDiv2 #apDiv4 p {
	font-size: 24px;
	font-family: Arial, Helvetica, sans-serif;
}
#apDiv15 {
	position: absolute;
	width: 200px;
	height: 64px;
	z-index: 4;
	left: 1058px;
	top: 22px;
}
#apDiv1 #apDiv11 table tr td {
	font-family: Verdana, Geneva, sans-serif;
}
#apDiv1 #apDiv11 table {
	font-size: 16px;
}
#apDiv21 {
	position:absolute;
	width:160px;
	height:58px;
	z-index:5;
	left: 1137px;
	top: 135px;
}
#apDiv1 #apDiv11 table {
	font-size: 14px;
}
.styled-button-1 {
	-webkit-box-shadow:rgba(0,0,0,0.2) 0 1px 0 0;
	-moz-box-shadow:rgba(0,0,0,0.2) 0 1px 0 0;
	box-shadow:rgba(0,0,0,0.2) 0 1px 0 0;
	color:#ffffff;
	background-color:#FA2;
	border-radius:5px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border:none;
	font-family:'Helvetica Neue',Arial,sans-serif;
	font-size:16px;
	font-weight:700;
	height:32px;
	width:120px;
	padding:4px 16px;
}
.styled-button-1:hover{
     height:32px;
	 cursor:pointer;
    -webkit-box-shadow:0px 1px 1px rgba(255,255,255,0.8) inset, 1px 1px 5px rgba(0,0,0,0.4);
    -moz-box-shadow:0px 1px 1px rgba(255,255,255,0.8) inset, 1px 1px 5px rgba(0,0,0,0.4);
    box-shadow:0px 1px 1px rgba(255,255,255,0.8) inset, 1px 1px 5px rgba(0,0,0,0.4);
	
    color:#fff;}
	.styled-buttn-1:active{
    position:relative;
    top:1px;
    background:#fec354;
    background:-webkit-gradient(linear,left top,left bottom,color-stop(#fec354,0),color-stop(#fecd61,1));
    background:-webkit-linear-gradient(top, #fec354 0%, #fecd61 100%);
    background:-moz-linear-gradient(top, #fec354 0%, #fecd61 100%);
    background:-o-linear-gradient(top, #fec354 0%, #fecd61 100%);
    background:linear-gradient(top, #fec354 0%, #fecd61 100%);
    filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#fec354', endColorstr='#fecd61',GradientType=0 );
    border-color:#d29a3a #cc9436 #c89133;
    text-shadow:0 1px 0 #fee1a0;
    -webkit-box-shadow:0 1px 1px #d4d4d4, inset 0 1px 0 #fed17e;
    -moz-box-shadow:0 1px 1px #d4d4d4, inset 0 1px 0 #fed17e;
    box-shadow:0 1px 1px #d4d4d4, inset 0 1px 0 #fed17e;
}
.styled-button-2 {
	-webkit-box-shadow:rgba(0,0,0,0.2) 0 1px 0 0;
	-moz-box-shadow:rgba(0,0,0,0.2) 0 1px 0 0;
	box-shadow:rgba(0,0,0,0.2) 0 1px 0 0;
	color:#ffffff;
	background-color:#FA2;
	border-radius:5px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border:none;
	font-family:'Helvetica Neue',Arial,sans-serif;
	font-size:16px;
	font-weight:700;
	height:32px;
	width:120px;
	padding:4px 16px;
}
.styled-button-2:hover{
     height:32px;
	 cursor:pointer;
    -webkit-box-shadow:0px 1px 1px rgba(255,255,255,0.8) inset, 1px 1px 5px rgba(0,0,0,0.4);
    -moz-box-shadow:0px 1px 1px rgba(255,255,255,0.8) inset, 1px 1px 5px rgba(0,0,0,0.4);
    box-shadow:0px 1px 1px rgba(255,255,255,0.8) inset, 1px 1px 5px rgba(0,0,0,0.4);
	
    color:#fff;}
	.styled-buttn-2:active{
    position:relative;
    top:1px;
    background:#fec354;
    background:-webkit-gradient(linear,left top,left bottom,color-stop(#fec354,0),color-stop(#fecd61,1));
    background:-webkit-linear-gradient(top, #fec354 0%, #fecd61 100%);
    background:-moz-linear-gradient(top, #fec354 0%, #fecd61 100%);
    background:-o-linear-gradient(top, #fec354 0%, #fecd61 100%);
    background:linear-gradient(top, #fec354 0%, #fecd61 100%);
    filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#fec354', endColorstr='#fecd61',GradientType=0 );
    border-color:#d29a3a #cc9436 #c89133;
    text-shadow:0 1px 0 #fee1a0;
    -webkit-box-shadow:0 1px 1px #d4d4d4, inset 0 1px 0 #fed17e;
    -moz-box-shadow:0 1px 1px #d4d4d4, inset 0 1px 0 #fed17e;
    box-shadow:0 1px 1px #d4d4d4, inset 0 1px 0 #fed17e;
}
</style>
<script>
function validForm(){
	var qt=parseInt("<?php echo $a ?>");
	var i=1;
	for(i; i<=qt; i++)
	{
	var a=document.getElementById("item_name"+i).value;
	var b=document.getElementById("quantity"+i).value;
	var c=document.getElementById("subcategory"+i).value;
	if(a=="")
	{
		alert("Select Item");
	    return false;

	}
	if(b=="")
	{
		alert("Enter no. of quantity");
	    return false;

	}
	if(c=="")
	{
		alert("Availability cannot be null ");
	    return false;

	}
	if(b>c)
	{
		alert("No of quantities exceeded!");
	    return false;
	}
	else
	{
		return true;
	}
	}
}
</script>

</head>

<body>
<form action="ordercon1.php" target='_blank' onsubmit="return validForm()" method="GET">
<div id="apDiv1">
   <div id="apDiv2">
    <div id="apDiv15"><img src="niclogo.png" width="233" height="55" /></div>
    <div id="apDiv4">
    <p>NATIONAL INFORMATICS CENTER,DIBRUGARH</p> </div>
    <div id="apDiv5">INVENTORY CONTROL SYSTEM</div>
  </div>
 
 
 
 
  <div id="apDiv6">
  <input type="hidden" name="department" value="<?php echo $rs[2] ?>" />
    <table width="343" height="81">
      <tr>
        <td width="159" style="font-family: Verdana, Geneva, sans-serif; font-weight: normal;">Employee Id</td>
        <td width="10" style="font-weight: 600; text-align: center;">:</td>
        <td width="158" style="font-family: Verdana, Geneva, sans-serif; font-weight: normal;"><?php echo $id ?></td>
      </tr>
      <tr>
        <td style="font-family: Verdana, Geneva, sans-serif; font-weight: normal;">Employee Name</td>
        <td style="font-weight: 600; text-align: center;">:</td>
        <td style="font-family: Verdana, Geneva, sans-serif; font-weight: normal;"><?php echo $rs[0] ?></td>
      </tr>
    </table>
    
  </div>
  
  <div id="apDiv11">
    <table width="917" height="171">
      <tr>
        <td width="149">Serial No.</td>
        <td width="163">Item Name</td>
        <td width="274">Quantity</td>
        <td width="160">Available</td>
        <td width="147">&nbsp;</td>
      </tr>
      <?php
  $i=1;
  $count=1;
  while($i<=$a)
  {
	  ?>
      <tr>
        <td>&nbsp;<?php echo $count++ ?></td>
		<td>
          <select id="item_name<?php echo $i ?>" name="item_name[<?php echo $i ?>]" onChange='get_subcategory(this.value)'>
          <?php
          echo'<option value="">CHOOSE</option>'; 
		  $sql1=mysql_query("select * from consumable ");
		  while($rows=mysql_fetch_array($sql1))
		  {
		    $item_id=$rows['id'];
			$name=$rows['name'];
            echo'<option  value='.$item_id.','.$i.'>'.$name.'</option>';
		  }  
		  ?> 
     
		  </select>
        </td>
          <td>
          <input type="text" id='quantity<?php echo $i?>' name="quantity[<?php echo $i?>]" />
          /
            
          pack </td>
          <td>
           <select name='subcategory[<?php echo $i?>]' id='subcategory<?php echo $i?>' >
            </select>
         </td>
          <td><label id="report<?php echo $i?>"></label></td>
      </tr>
      <?php 
	  $i++;
  }
  ?>
  </table>
    <div id="apDiv17" align="center">
      <div id="apDiv18">
        <input type="submit" name="submit" id="button" value="Submit" class="styled-button-2" style="position:absolute;top:205px;left:250px;" />
        <div id="apDiv20">
          <a href="consumable1.php?consumableitem=<?php if(isset($_GET['consumableitem'])){ echo $_GET['consumableitem']+1;} ?>&submit=Submit"><input type="button" name="button3" id="button3" value="Add+" class="styled-button-2" style="position:absolute;top:205px;left:560px;" /></a>
        </div>
      </div>
      <div id="apDiv19">
       <a href="consumable1.php?consumableitem=<?php if(isset($_GET['consumableitem']) && $_GET['consumableitem']>1){ echo $_GET['consumableitem']-1;}else{ echo 1; } ?>&submit=Submit"> <input type="button" name="remove" style="text-decoration:none;" class="styled-button-1" id="button2" value="Remove Item-" /></a>
      </div>
    </div>
  </div>
  <div id="apDiv21"><a href="home.php"><img src="home_button.png" width="155" height="57" /></a></div>
</div>
<?php
$sql1=mysql_query("select DISTINCT(requistion_no) from orders where type='consumable' ORDER BY requistion_no DESC LIMIT 1");
if(mysql_num_rows($sql1)>0)
{
	while($row1=mysql_fetch_array($sql1))
	{
	 $requistion_no=$row1["requistion_no"]+1;
	}
}
else
{
	$requistion_no=1;
}
?>
<div id="apDiv8">
  <div id="apDiv9">Requistion No.:&nbsp; &nbsp; <input type="text" name="requistion_no" value="<?php echo $requistion_no; ?>" readonly />
   
  </div>
  <div id="apDiv10">Consumable</div>
</div>
</form>
</body>
</html>