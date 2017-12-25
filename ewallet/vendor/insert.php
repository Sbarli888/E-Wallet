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
$cons_name=$_POST['cons_name'];
$cons_email=$_POST['cons_email'];
$status=$_POST['status'];
if(strlen($cons_name)<4)
{$error="Student Name must at lease more than 4 character!!!";
 }else
{
if($_POST['cons_id']=="0")
{
//add new student
$sql="insert into consumer(cons_name,cons_email,status) values
('$cons_name','$cons_email','$status')";
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
$sql="delete from item where item_id='{$_GET['id']}' ";
$query=mysql_query($sql);
if($query)
{
{
header('Refresh:0; list_item.php');
 }
}
}
?>
<form action="" method="post">
<table>
<tr>
<td>Full name</td>
<td><input type="text" name="cons_name"> <input type="hidden" name="cons_id" value="0"
/></td>
</tr>
<tr>
<td>Email adress</td>
<td><textarea name="cons_email"></textarea></td>
</tr>
<tr>
<td>Status</td>
<td>
<select name="status">
<option value="Approved">Approved</option>
<option value="Not Approved">Not Approved</option>
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