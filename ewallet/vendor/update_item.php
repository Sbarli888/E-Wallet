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
$item_id=$_POST['item_id'];
$item_name=$_POST['item_name'];
$item_price=$_POST['item_price'];
$available=$_POST['available'];
if(strlen($item_name)<4)
{$error="Student Name must at lease more than 4 character!!!";
 }else
{
if($_POST['item_id']=="0")
{
//add new student
$sql="insert into consumer(cons_name,cons_email,status) values
('$cons_name','$cons_email','$status')";
$query=mysql_query($sql);
}else
{
//update exist student

$sql="update item set item_name='$item_name', item_id='$item_id', item_price='$item_price',
available='$available' where item_id= '{$_POST['item_id']}'";
 $query=mysql_query($sql);
if($query)
{
header('Refresh:0; list_item.php');
 }

}
}
}

if(isset($_GET['edited']))
{
$sql="select * from item where item_id='{$_GET['id']}' ";
$query=mysql_query($sql);
$row=mysql_fetch_object($query);
$item_id=$row->item_id;
$item_name=$row->item_name;
$item_price=$row->item_price;
$available=$row->available;
}
?>

<form action="" method="post">
<table>
<tr>
<td>Item Name</td>
<td><input type="text" name="item_name" value="<?php echo $item_name; ?>"> <input
type="hidden" name="item_id" value="<?php echo $item_id; ?>"> </td>
</tr>
<tr>
<td>Item Price</td>
<td><textarea name="item_price"><?php echo $item_price; ?></textarea></td>
</tr>
<tr>
<td>Status</td>
<td>
<select name="available">
<option <?php if($available=='Available') echo 'selected'; ?> value="Available">Available</option>
<option <?php if($available=='Not Available') echo 'selected'; ?> value="Not Available">Not Available</option>
</select>
<td>
</tr>
<td></td>
<td><input type="submit" value="Save" name="btnsave"></td>
</tr>
</form>
</table>
</body>