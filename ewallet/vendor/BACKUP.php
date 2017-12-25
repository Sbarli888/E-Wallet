

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
session_start();
include('db.php');
$username=$_SESSION['vendor_uname'];


if(isset($username))
{
	$sql="SELECT vendor_id FROM vendor WHERE vendor_uname = $username";
	$result=mysql_query($sql);

while($row=mysql_fetch_array($result))	{
		$id=$row['vendor_id'];
		
	}
}




$error="";
if(isset($_POST['btnsave']))
{
$item_name=$_POST['item_name'];
$item_price=$_POST['item_price'];
$available=$_POST['status'];
$item_id=$_POST['item_id'];
if(strlen($item_name)<4)
{$error="Student Name must at lease more than 4 character!!!";
 }else
{
if(isset($_POST['btnsave']))
{
//add new student
$sql="insert into item(item_name,item_price,available,item_vendor_id) values
('$item_name','$item_price','$available','$item_id')";
$query=mysql_query($sql);
}else
{
//update exist student
echo "update";
}
}
}

if(isset($_GET['deleted']))
{
$sql="delete from consumer where cons_id='{$_GET['id']}' ";
$query=mysql_query($sql);
if($query)
{
{
header('Refresh:0; view.php');
 }
}
}
?>
<form action="" method="post">
<table>
<tr>
<td>Item name</td>
<td><input type="text" name="item_name"> 
<?php echo "<input type=\"hidden\" name=\"item_id\" value= \"$id\">"; ?>
</td>
</tr>
<tr>
<td>Item price</td>
<td><input type="text" name="item_price"></td>
</tr>
<tr>
<td>Status</td>
<td>
<select name="status">
<option value="Available">Available</option>
<option value="Not Available">Not Available</option>
3 | P a g e
</select>
<td>
</tr>
<td></td>
<td><input type="submit" value="Save" name="btnsave"></td>
</tr>
</form>
</table>
</body>