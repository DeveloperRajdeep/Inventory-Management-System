<?php
    include "conn.php";
 ?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>New user</title>

    <style type="text/css">
    #apDiv1 {
	position: absolute;
	width: 768px;
	height: 310px;
	z-index: 1;
	left: 201px;
	top: 149px;
}
    </style>

    <script>
      function approveUser(){
        if(confirm("Do you want to check?")==false)
          return false;
      }
      </script>
</head>


<body>
<h1 class="admin">Item Report</h1>
<div id="apDiv1">
  <table width="769" border="1">
    <tr>
      <td>#</td>
      <td>Message</td>
	  <td>Sender Id</td>
      <td>Sender</td>
      <td>Action</td>
    </tr><?php
	$i=1;
  $var=mysql_query("select * from notification where status='unchecked'");
              while($row=mysql_fetch_array($var))
              {
				$id=$row['id'];
                $message=$row['message'];
                $e_id=$row['e_id'];
                $frm=$row['frm'];
                $status=$row['status'];
  echo'<tr>';
       echo'<td>'.$i++.'</td>';
       echo'<td>'.$message.'</td>';
       echo'<td>'.$e_id.'</td>';
       echo'<td>'.$frm.'</td>';
       echo'<td><a style="color:#fff" onclick="return approveUser();" href="check.php?id='.$id.'">Check</a></td>';
     echo'</tr>';
   }
   ?>
  </table>
</div> 


 

</body>

</html>