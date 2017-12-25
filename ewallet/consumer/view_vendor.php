
<?php 
session_start();
 
?>

<html>
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
<form id="form" action="view.php" method="POST">
<tr>
<?php
echo "<br><center><a>Select Vendor's ID</a> </center>";
mysql_connect('localhost', 'root', '');
mysql_select_db('ewallet');

$sql = "SELECT vendor_id FROM vendor";
$result = mysql_query($sql);

echo "<center><br><select name=\"vendor_ID\" form=\"form\">";
while ($row = mysql_fetch_array($result)) {
	$id = $row['vendor_id'];
    echo "<option value='" . $id . "'>" . $id . "</option>";
}
echo "</select></center>";
?>
<br><center><input type="submit" value="VIEW AVAILABLE ITEMS" name="form"></center>
</tr></form>

</body>
</html>
