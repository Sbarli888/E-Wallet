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

$sql="update consumer set cons_name='$cons_name', cons_email='$cons_email',
status='$status' where cons_id= '{$_POST['cons_id']}'";
 $query=mysql_query($sql);
if($query)
{
header('Refresh:0; view.php');
 }

}
}
}

if(isset($_GET['edited']))
{
$sql="select * from consumer where cons_id='{$_GET['id']}' ";
$query=mysql_query($sql);
$row=mysql_fetch_object($query);
$cons_id=$row->cons_id;
$cons_name=$row->cons_name;
$cons_email=$row->cons_email;
$status=$row->status;
}
?>
<form action="" method="post">
<table>
<tr>
<td>Full Name</td>
<td><input type="text" name="cons_name" value="<?php echo $cons_name; ?>"> <input
type="hidden" name="cons_id" value="<?php echo $cons_id; ?>"> </td>
</tr>
<tr>
<td>cons_email</td>
<td><textarea name="cons_email"><?php echo $cons_email; ?></textarea></td>
</tr>
<tr>
<td>Status</td>
<td>
<select name="status">
<option <?php if($status=='Approved') echo 'selected'; ?> value="Approved">Approved</option>
<option <?php if($status=='Not Approved') echo 'selected'; ?> value="Not Approved">Not Approved</option>
</select>
<td>
</tr>
<td></td>
<td><input type="submit" value="Save" name="btnsave"></td>
</tr>
</form>
</table>