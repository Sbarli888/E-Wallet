<?php
session_start();
?>

<?php
include('db.php');

?>

<head>
<style>
body {
    color: white;
}

body {
    background-color: black;
}
</style>
</head>
<body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php
if(isset($_POST['form']))
{
   $id = $_POST['vendor_ID'];
   $sql = "SELECT * FROM item WHERE item_vendor_id LIKE '$id'";
  echo "<center>Click 'SHOW' to view available item<br><br>"; 
  echo "<form method=\"POST\" action=\"\">";
  echo "<input type=\"hidden\" name=\"aa\" value=\"$id\">";
  echo "<input type=\"submit\" name=\"go\" value=\"go\">";
  echo "</center></form>";
}

if(isset($_POST['go']))
{
	$ven_id = $_POST['aa'];
	
	$sql1 = "SELECT * FROM item WHERE item_vendor_id = '$ven_id'";
	$result = mysql_query($sql1,$con);
	
	echo "<table align=\"center\" cellpadding=\"5\" cellspacing=\"0\" border=\"1\">";
echo "<tr>";

echo "<th>Item Name</th>";
echo "<th>Item Price</th>";
echo "<th>Status</th>";
echo "</tr>";


if(mysql_num_rows($result)>0)
{
$i=1;
	while($row=mysql_fetch_array($result))
	{

	echo "<tr>";
	echo "<td>" . $row['item_name'] . "</td>";
	echo "<td>" . $row['item_price'] . "</td>";
	echo "<td>" . $row['available'] . "</td>";

echo "</tr>";

	}
}

echo "</table>";
	
}

echo "<br>";
?>
<?php

include('db.php');
$error="";
if(isset($_POST['btnsave']))
{
$trx_name=$_POST['trx_name'];
$trx_price=$_POST['trx_price'];

}

if(isset($_POST['btnsave']))
{
	//add new student
	$sql="insert into bb(bb_name,bb_price) values
	('$trx_name','$trx_price')";
	$query=mysql_query($sql);
}

echo"<form action=\"\" method=\"post\">";
echo"<table align=\"center\">";


echo"<tr>



<td>Item name </td>
<td><input type=\"text\" name=\"trx_name\"> 
</td>

<td>    Item price</td>
<td><input type=\"text\" name=\"trx_price\"></td>
</tr><br><br>";

echo"</form>";
echo"</table>";
echo"<center><br><input type=\"submit\" value=\"Go!\" name=\"btnsave\"></center>";
?>

</body>