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
<th>Notification</th>
<th>Action</th>
</tr>
<?php
$result=mysql_query("SELECT cons_id FROM consumer WHERE 
cons_uname = '" . $_SESSION["a2"] . "' ");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$row = mysql_fetch_row($result);

$dollar= $row[0]; 

$query=mysql_query("SELECT * FROM notification WHERE noti_cons_id= $dollar");
if(mysql_num_rows($query)>0)
{
$i=1;
while($row=mysql_fetch_object($query))
{
?>
<tr>
<td><?php echo $i++; ?></td>
<td><?php echo $row->noti_text; ?></td>
<td>
<a href="see.php?deleted=1&id=<?php echo $row->noti_id; ?>"><button>OK!</button></a>
</td>

</tr>
<?php
}
}
?>
</table>

<br>
</body>