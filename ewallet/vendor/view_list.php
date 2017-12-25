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
<th>Consumer Name</th>
<th>Email</th>
<th>Status</th>
<th>Action</th>
</tr>
<?php
$sql="select * from consumer";
$query=mysql_query($sql);
if(mysql_num_rows($query)>0)
{
$i=1;
while($row=mysql_fetch_object($query))
{
?>
<tr>
<td><?php echo $i++; ?></td>
<td><?php echo $row->cons_name; ?></td>
<td><?php echo $row->cons_email; ?></td>
<td><?php echo $row->status; ?></td>
<td>
<a href="update.php?edited=1&id=<?php echo $row->cons_id; ?>">Edit</a> |
<a href="insert.php?deleted=1&id=<?php echo $row->cons_id; ?>">Delete</a>
</td>
</tr>
<?php
}
}
?>
</table>

<br>
</body>