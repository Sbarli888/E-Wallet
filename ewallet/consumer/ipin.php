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
//if(isset($_SESSION['vendor_uname'])){
$conn = mysql_connect("localhost", "root", "") or die("mysql connection is failure.");
mysql_select_db("ewallet") or die("Database does not exists.");
$username=$_SESSION['vendor_uname'];

$error="";
if(isset($_POST['btnsave']))
{
$item_name=$_POST['item_name'];
$item_price=$_POST['item_price'];
$available=$_POST['status'];
$item_id=$_POST['item_id'];
	if(strlen($item_name)<4)
	{
		$error="Student Name must at lease more than 4 character!!!";
	}else
	{
		if(isset($_POST['btnsave']))
		{
		//add new student
		$sql="insert into item(item_name,item_price,item_vendor_id,available) values('$item_name','$item_price','$item_id','$available')";
		$query=mysql_query($sql,$conn);
		}else
		{
			//update exist student
			echo "update";
		}
	}	
}
?>
<form action="" method="post">
Item name
<input type="text" name="item_name"> 
<?php

	$sql="SELECT vendor_id FROM vendor WHERE vendor_uname = '$username'";
	$result=mysql_query($sql,$conn);
	global $id;
	
	function familyName($fname) {
    echo "$fname Refsnes.<br>";
}

	if(!$result)
	{
		echo mysql_error() . mysql_errno();
	}
while($row=mysql_fetch_array($result))	{
 $id=$row['vendor_id'];
 familyName("$id");
}
		

echo "<input type=\"hidden\" name=\"item_id\" value=\"$id\">";
?>
Item price
<input type="text" name="item_price"><br><br>
Status
<select name="status">
<option value="Available">Available</option>
<option value="Not Available">Not Available</option>
</select>
<input type="submit" value="Save" name="btnsave">
</form>

</body>
<?php
//}
?>