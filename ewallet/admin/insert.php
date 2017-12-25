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
$cons_name=$_POST['cons_name'];
$cons_email=$_POST['cons_email'];
$status=$_POST['status'];
$cons_pass=$_POST['cons_pass'];
$cons_uname=$_POST['cons_uname'];
$cons_phone=$_POST['cons_phone'];
if(strlen($cons_name)<4)
{echo '<script>alert("Please enter customer name more than 4");</script>';
 }else
{
if($_POST['cons_id']=="0")
{
//add new student
$sql="insert into consumer(cons_name,cons_email,cons_pass,cons_uname,status,cons_phone) values
('$cons_name','$cons_email','$cons_pass','$cons_uname','$status','$cons_phone')";
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
<center><font style="color:yellow"><marquee>New customer password will be "default123" , customer/vendor has to email admin to change their password</marquee></font></center>
<br><table>
<tr>
<td>Full name</td>
<td><input type="text" class="textbox" name="cons_name"> <input type="hidden" name="cons_id" value="0"
/><input type="hidden" name="cons_pass" value="default123" </td>
</tr>
<tr>
<td>Username</td>
<td><input class="textbox" name="cons_uname"></input></td>
</tr>
<tr>
<td>Email adress</td>
<td><input class="textbox"  name="cons_email"></input></td>
</tr>
<tr>
<td>Phone no</td>
<td><input class="textbox"  name="cons_phone"></input></td>
</tr>
<tr>
<td>Status</td>
<td>
<select class="textbox" name="status">
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