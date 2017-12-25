<html>
<?php
session_start();
?>

<?php
include('db.php');
?>

<head>
<style>
body {
    color: white;
}

body {
    background-color: black;
}
</style>
</head>
<body>
<p>&nbsp;</p>
<p>&nbsp;</p>

<?php
$sql="select * from consumer where cons_uname ='".$_SESSION['a2']."'";
if($sql === FALSE) { 
die(mysql_error());}
$query=mysql_query($sql);
while($row = mysql_fetch_array($query))
   {
 echo "<table  align=\"center\" border='1'>
<tr>
  <th>Name</th>";
 echo "<td>" . $row['cons_name'] . "</td>";
  echo "</tr>
<tr>
    <th>Email</th>";
  echo "<td>" . $row['cons_email'] . "</td>";
  echo "</tr>
<tr>
    <th>Phone:</th>";
  echo "<td>" . $row['cons_phone'] . "</td>";
  echo "</tr>
<tr>
    <th>Status:</th>";
  echo "<td>" . $row['status'] . "</td>";
  echo "</tr>
</tr>";
echo "</tr>";
echo "</table>";
   }
?>
<br>
</body>
</html>