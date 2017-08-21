<?php
include 'conn.php';
$item_id = $_REQUEST['c_id'];
$sql= "SELECT * FROM consumable WHERE id = '".$item_id."'";
$result = mysql_query($sql);
echo "<select name='subcategory'>";
while($row = mysql_fetch_array($result))
{
$quantity=$row['quantity'];
echo "<option value='".$quantity."'>".$quantity."</option>";
}
echo "</select>";
echo ";".$quantity;
?>