<?php
session_start();
?>


<html>
<head>
<title>EWALLET Admin Panel </title>
<!--<link rel="stylesheet" type="text/css" href="http://localhost/ewallet/style_vendor.css">-->



<style type="text/css">
 .topcorner{
   position:absolute;
   top:0;
   color:white;
   right:10;
  }
  
body{
	background: #bc2323;
	margin: 0px;
	border: 0px;
}
#header{
	width: auto;
	height: 110px;
	background: #bc2323;
	color: white;
}
#sidemenu{
	float: left;
	width: 300px;
	background: #bc2323;
	color: white;
	
}
#data{
	width: auto;
	background:#bc2323;
	color: white;
	padding-left:330px;
}
#head_img{
	background:white;
	border-radius:50px;
}
#sidemenu.ul li{
	display: inline-block;
	padding-bottom: 10px;
	
}
li{
	padding-bottom: 30px;
	border-bottom: 3px solid grey;
}
li:hover {
	background: black;
	color: white;
	padding-left:10px;
    -moz-transition: padding-left .3s ease-in;
    -o-transition: padding-left  .3s ease-in;
    -webkit-transition: padding-left  .3s ease-in;
    transition: padding-left  .3s ease-in;
}
a{
	text-decoration:none;
	color:white;
}
#back{
	width: 50px;
	height: 50px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}
#back:hover{
	box-shadow: 0 4px 8px 0 white, 0 6px 20px 0 white;
}
#back{
	width: 50px;
	height: 50px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}
#back:hover{
	box-shadow: 0 4px 8px 0 white, 0 6px 20px 0 white;
}
img{
	width: 70px;
	height: 70px;
	}
 
  
</style>
</head>


<body>

<div class="topcorner"><p>WELCOME | <?php
echo $_SESSION['admin'];
?> <a href="logout.php">
Logout</a>
</p></div>

<div id="header">
<center><img src="x.png">
<h3> EWALLET ADMIN PANEL  </h3></center>
</div>

<div id="sidemenu">
 <ul>
    <li><a href="view.php" target="iframebro">Consumer List</a> </li>
	<li><a href="view2.php" target="iframebro">Vendor List</a> </li>
	<li><a href="insert.php" target="iframebro">Create New Customer</a> </li>
		<li><a href="insertvendor.php" target="iframebro">Create New Vendor</a> </li>
	<li><a href="mail.php" target="iframebro"> Notify Consumer </a></li>
	
 </ul>	
</div>

<div id="data">
<br><br>


<iframe name="iframebro" src="view.php" height="1080" width="1000"></iframe>
<!--<center><h1>Data available</h1></center>

<?php
    include 'db.php';
	
	//add error_reporting(0); to remove errors 
	
	
	$sql = "SELECT * FROM data";
	$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   
    while($row = mysqli_fetch_assoc($result)) {
    echo "<h4>ID: </h4>" . $row["id"]. "<br>" . "  Name: " . $row["name"].  " <br> " .  "Email: " . $row["email"] .  "<br>" . "Password: " . $row["pass"]. "<br><br><br>";
	 }
} else {
    echo "<h3><center>No user data found!<center></h3>";
}
?> -->
</div>
<!--
      ENCODED BY RAMEEZ SAFDAR / For more web and other programmings check out my channel nosgene https://www.youtube.com/channel/UCYbUaMVWujooISm4m7NDIeg
 -->
</body>
</html>	