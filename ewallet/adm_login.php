<?php
session_start();
?>

<?php
require ('sql_connect.php');
if (isset($_POST['submit'])){
$username=mysql_escape_string($_POST['uname']);
$password=mysql_escape_string($_POST['pass']);
$_SESSION['admin']= $username;

if (!$_POST['uname'] | !$_POST['pass'])
{
echo ("<SCRIPT LANGUAGE='JavaScript'>
 window.alert('You did not complete all of the required fields')
 window.location.href='admin_login.html'
 </SCRIPT>");
exit();
 }
$sql= mysql_query("SELECT * FROM `admin` WHERE `adm_uname` = '$username' AND `adm_pass` =
'$password'");
if(mysql_num_rows($sql) > 0)
{	 

echo ("<SCRIPT LANGUAGE='JavaScript'>
 window.alert('Login Succesfully!.')
 window.location.href='admin/index.php'
 </SCRIPT>");
 
exit();
}
else{
echo ("<SCRIPT LANGUAGE='JavaScript'>
 window.alert('Wrong username password combination.Please re-enter.')
 window.location.href='admin_login.html'
 </SCRIPT>");
exit();
}
}
else{
}
?>