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
<body>
<form action="" method="post">
<table>
<tr>
<td>Full Name</td>
<td><input type="text" class="textbox" name="cons_name" value="<?php echo $cons_name; ?>"> <input
type="hidden" name="cons_id" value="<?php echo $cons_id; ?>"> </td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" class="textbox"  name="cons_email" value="<?php echo $cons_email; ?>"></td>
</tr>
<tr>
<td>Status</td>
<td>
<select class="textbox" name="status">
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
</body>