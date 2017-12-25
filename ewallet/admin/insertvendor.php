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
$vendor_name=$_POST['vendor_name'];
$vendor_email=$_POST['vendor_email'];
$status=$_POST['status'];
$vendor_pass=$_POST['vendor_pass'];
$vendor_uname=$_POST['vendor_uname'];
$vendor_phone=$_POST['vendor_phone'];
if(strlen($vendor_name)<4){
echo '<script>alert("Please enter vendor name more than 4");</script>';}
else
{

//add new student
$sql="insert into vendor(vendor_name,vendor_email,vendor_pass,vendor_uname,status,vendor_phone) values
('$vendor_name','$vendor_email','$vendor_pass','$vendor_uname','$status','$vendor_phone')";
$query=mysql_query($sql);
}
}
?>
<form action="" method="post">
<center><font style="color:yellow"><marquee>New vendor password will be "default123" , customer/vendor has to email admin to change their password</marquee></font></center>
<br>
<table>
<tr>
<td>Vendor name</td>
<td><input type="text" class="textbox" name="vendor_name"> <input type="hidden" name="hh_id" value="0"
/><input type="hidden" name="vendor_pass" value="default123" </td>
</tr>
<tr>
<td>Vendor Username</td>
<td><input type="text" class="textbox" name="vendor_uname"></input></td>
</tr>
<tr>
<td>Vendor Email adress</td>
<td><input type="text" class="textbox" name="vendor_email"></input></td>
</tr>
<tr>
<td>Vendor Phone no</td>
<td><input type="text" class="textbox" name="vendor_phone"></input></td>
</tr>
<tr>
<td>Status</td>
<td>
<select name="status" class="textbox">
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