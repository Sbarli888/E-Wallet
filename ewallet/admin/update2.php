<?php
include('db.php');
$error="";
if(isset($_POST['btnsave']))
{
	
$vendor_name=$_POST['vendor_name'];
$vendor_email=$_POST['vendor_email'];
$status=$_POST['status'];
if(strlen($vendor_name)<4)
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

$sql="update vendor set vendor_name='$vendor_name', vendor_email='$vendor_email',
status='$status' where vendor_id= '{$_POST['vendor_id']}'";
 $query=mysql_query($sql);
if($query)
{
header('Refresh:0; view2.php');
 }

}
}
}

if(isset($_GET['edited']))
{
$sql="select * from vendor where vendor_id='{$_GET['id']}' ";
$query=mysql_query($sql);
$row=mysql_fetch_object($query);
$vendor_id=$row->vendor_id;
$vendor_name=$row->vendor_name;
$vendor_email=$row->vendor_email;
$status=$row->status;
}
?>
<form action="" method="post">
<table>
<tr>
<td>Full Name</td>
<td><input type="text" name="vendor_name" value="<?php echo $vendor_name; ?>"> <input
type="hidden" name="vendor_id" value="<?php echo $vendor_id; ?>"> </td>
</tr>
<tr>
<td>Email</td>
<td><textarea name="vendor_email"><?php echo $vendor_email; ?></textarea></td>
</tr>
<tr>
<td></td>
<td>
<select name="status">
<option value="0">Update status</option>
<option <?php if($status=="Approved") echo 'selected="selected"'; ?> value="Approved">Approved</option>
<option <?php if($status=="Not Approved") echo 'selected="selected"'; ?> value="Not Approved">Not Approved</option>
</select>
<td>
</tr>
<td></td>
<td><input type="submit" value="Save" name="btnsave"></td>
</tr>
</form>
</table>