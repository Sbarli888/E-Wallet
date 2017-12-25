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

$id = $row['vendor_id'];

$sql="select * from item i,vendor v where v.vendor_id LIKE '$id'";
$query=mysql_query($sql);
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



</tr>
<?php
}
}
?>
</table>

<br>
</body>