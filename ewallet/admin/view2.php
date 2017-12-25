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
<th>ID</th>
<th>Vendor Name</th>
<th>Email</th>
<th>Status</th>
<th>Action</th>
</tr>
<?php
$sql="select * from vendor";
$query=mysql_query($sql);
if(mysql_num_rows($query)>0)
{
$i=1;
while($row=mysql_fetch_object($query))
{
?>
<tr>
<td><?php echo $row->vendor_id; ?></td>
<td><?php echo $row->vendor_name; ?></td>
<td><?php echo $row->vendor_email; ?></td>
<td><?php echo $row->status; ?></td>
<td>
<a href="update2.php?edited=1&id=<?php echo $row->vendor_id; ?>">Edit</a> |
<a href="insert2.php?deleted=1&id=<?php echo $row->vendor_id; ?>">Delete</a>
</td>
</tr>
<?php
}
}
?>
</table>

<br>
</body>