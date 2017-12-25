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
<table align="center" cellpadding="5" cellspacing="0" border="1">
<tr>
<th>NO</th>
<th>Item</th>
<th>Item Price</th>
<th>Status</th>

</tr>
<?php
$result=mysql_query("SELECT vendor_id FROM vendor WHERE 
vendor_uname = '" . $_SESSION["a5"] . "' ");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$row = mysql_fetch_row($result);

$dollar= $row[0]; 

$query=mysql_query("SELECT * FROM item WHERE item_vendor_id= $dollar");
if(mysql_num_rows($query)>0)
{
$i=1;
while($row=mysql_fetch_object($query))
{
?>
<tr>
<td><?php echo $i++; ?></td>
<td><?php echo $row->item_name; ?></td>
<td> RM <?php echo $row->item_price; ?></td>
<td><?php echo $row->available; ?></td>
<td>
<a href="update_item.php?edited=1&id=<?php echo $row->item_id; ?>">Edit</a> |
<a href="insert.php?deleted=1&id=<?php echo $row->item_id; ?>">Delete</a>
</td>
</tr>
<?php
}
}
?>
</table>

<br>
</body>