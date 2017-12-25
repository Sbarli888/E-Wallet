
<?php
include('db.php');
?>
<head>
<style>

body {
	color : white;
}

body {
    background-color: black;include('db.php');

}
</style>
</head>
<body>
<?php
    $query = $_GET['query']; 
	
    $sql="select * from item where item_name = '$query'";
	$vendorid=mysql_query("select item_vendor_id from item where item_name='$query'");
	$row3 = mysql_fetch_row($vendorid);
	$dollar= $row3[0]; 

	$ranggi=mysql_query("select vendor_name from vendor where vendor_id='$dollar'");
	$row2 = mysql_fetch_row($ranggi);
    
	

if($sql === FALSE) { 
die(mysql_error());}
$query=mysql_query($sql);
if($row = mysql_fetch_array($query))
   {
 echo "<table  align=\"center\" border='1'>
<tr>
  <th>Item Name</th>";
 echo "<td>" . $row['item_name'] . "</td>";
  echo "</tr>
<tr>
    <th>Item Price</th>";
  echo "<td>" . $row['item_price'] . "</td>";
  echo "</tr>
<tr>
    <th>Status</th>";
  echo "<td>" . $row['available'] . "</td>";
  echo "</tr>
<tr>
    <th>Vendor</th>";
  echo "<td>" . $row2['0'] . "</td>";
  echo "</tr>
</tr>";
echo "</tr>";
echo "</table>";
   }
   else {
	   echo "TAK JUMPA";
   }
?>



</body>
