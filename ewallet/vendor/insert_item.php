<?php
session_start();
?>

<head>
<style>

body {
	color : white;
}

body {
    background-color: black;
}

.textbox {
    width: 275px;
    border: solid 1px #ccc;
    height: 26px;
    background: #5E768D;
    background: -moz-linear-gradient(top, #546A7F 0%, #5E768D 20%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#546A7F), color-stop(20%,#5E768D));
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-box-shadow: 0px 1px 0px #000000;
    -webkit-box-shadow: 0px 1px 0px #000000;
    font-family: sans-serif;
    font-size: 16px;
    color: #000000;
    text-shadow: 0px -1px 0px #334F71;
} 
 .textbox:focus {
    background: #728EAA;
    background: -moz-linear-gradient(top, #668099 0%, #728EAA 20%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#668099), color-stop(20%,#728EAA));
    outline: 0;
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
$available=$_POST['available'];
$item_vendor_id=$_POST['item_vendor_id'];
if(strlen($item_name)<4)
{$error="Item Name must at lease more than 4 character!!!";
 }else
{
//add new student
$sql="insert into item(item_vendor_id,item_name,item_price,available) values
('$item_vendor_id','$item_name','$item_price','$available')";
$query=mysql_query($sql);
}
}


?>
<?php 
$result=mysql_query("SELECT vendor_id FROM vendor WHERE 
vendor_uname = '" . $_SESSION["a5"] . "' ");
$row = mysql_fetch_row($result);

$dollar= $row[0];

?>

<form action="" method="post">
<table>


<input type="hidden" name="item_vendor_id" value="<?php echo $dollar; ?>"></td>

<tr>
<td>Item name</td>
<td><input class="textbox" type="text" name="item_name"> 
</td>
</tr>
<tr>
<td>Item price</td>
<td><input class="textbox" type="text" name="item_price"></td>
</tr><br><br>

<tr>
<td>Status</td>
<td>
<select class="textbox" name="available">
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