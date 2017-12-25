<head>
<style>

body {
	color : white;
}

body {
    background-color: black;
}
</style>
</head>
<body>
<?php
include('db.php');
$error="";
if(isset($_POST['btnsave']))
{
$item_name=$_POST['item_name'];
$item_price=$_POST['item_price'];
$vendor_id=$_POST['vendor_id'];



if(strlen($item_name)<4)
{$error="Item Name must at lease more than 4 character!!!";
 }else
{
if(isset($_POST['btnsave']))
{
//add new student
$sql="insert into item(item_vendor_id,item_name,item_price) values
('$vendor_id','$item_name','$item_price')";
$query=mysql_query($sql);
}
}
}


?>	
<form action="" method="post">
<table align="center">

<tr>


<?php

echo "<br><center><a>Select Vendor's ID</a> </center>";
mysql_connect('localhost', 'root', '');
mysql_select_db('ewallet');

$sql = "SELECT vendor_id FROM vendor";
$result = mysql_query($sql);

echo "<center><br><select name='vendor_id'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['vendor_id'] . "'>" . $row['vendor_id'] . "</option>";
}
echo "</select></center>";

?>
</tr>

<tr>
<td>Item name </td>
<td><input type="text" name="item_name"> 
</td>

<td>    Item price</td>
<td><input type="text" name="item_price"></td>
</tr><br><br>


</form>
</table>
<center><br><input type="submit" value="Go!" name="btnsave"></center>
</body>
