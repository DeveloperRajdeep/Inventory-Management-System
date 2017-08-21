<?php
    include "conn.php";
 ?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>New user</title>

    <link rel="stylesheet" href="css/admin2.css" media="screen" type="text/css" />
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
        if(confirm("Do you want to approve?")==false)
          return false;
      }

      function deleteUser(){
        if(confirm("Do you want to delete?")==false)
          return false;
      }
      </script>
</head>


<body>
<h1 class="admin">NEW USERS</h1>
<div id="apDiv1">
  <table width="769" border="1">
    <tr>
      <td>Username</td>
      <td>Email</td>
      <td>Department</td>
      <td>Action</td>
    </tr><?php
  $var=mysql_query("select * from empregisterform where status='0'");
              while($row=mysql_fetch_array($var))
              {
                $name=$row['username'];
                $email=$row['email'];
                $depart=$row['department'];
                $status=$row['status'];
                $id=$row['id'];
  echo'<tr>';
       echo'<td>'.$name.'</td>';
       echo'<td>'.$email.'</td>';
       echo'<td>'.$depart.'</td>';
       echo'<td><a onclick="return approveUser();" href="newuser.php?id='.$id.'">Approve</a> | <a onclick="return deleteUser();" href="delete_user.php?id='.$id.'">Delete</a></td>';
     echo'</tr>';
   }
   ?>
  </table>
</div> 


 

</body>

</html>