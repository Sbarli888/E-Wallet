<!DOCTYPE html>
<html>
<head>
<style>
body {
    background-color: black;
}

body {
    color: white;

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

<h2>SEND NOTIFICATION TO CUSTOMER</h2>

<?php
include('db.php');
if(isset($_POST['btnsend']))
{
$noti_cons_id=$_POST['noti_cons_id'];
$noti_text=$_POST['noti_text'];
$noti_id=$_POST['noti_id'];

if(strlen($noti_text)<1)
{echo '<script>alert("Dont leave it blank");</script>';
 }else
{
if($_POST['noti_id']=="0")
{
//add new student
$sql="insert into notification(noti_cons_id,noti_text) values
('$noti_cons_id','$noti_text')";
$query=mysql_query($sql);
}
}
}
?>
<form action="" method="post">
<table>

<tr>
<td>Enter Customer's ID:</td>
<td><input type="text" class="textbox" name="noti_cons_id"> <input type="hidden" name="noti_id" value="0"
/></td>
</tr>
<tr>
<td>Notification</td>
<td><textarea class="textbox" name="noti_text"></textarea></td>
</tr>

<td></td>
<td><input type="submit" value="SEND!" name="btnsend"></td>
</tr>
</form>
</table>

</body>
</html>
