<?php
$conn = mysql_connect("localhost", "root", "") or die("mysql connection is failure.");
mysql_select_db("ewallet") or die("Database does not exists.". mysql_error());
?>
