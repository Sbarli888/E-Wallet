<?php
include('db.php');
?>
<head>
<style>

body {
	color : white;
}

body {
    background-color: black;include('db.php');

}

.textbox { 
    background: white; 
    border: 1px solid #ffa853; 
    border-radius: 5px; 
    box-shadow: 0 0 5px 3px #ffa853; 
    color: #666; 
    outline: none; 
    height:23px; 
    width: 275px; 
  } 
  
</style>
</head>
<body>

<form action="search.php" method="GET">
	<p>Enter item name you look for : </p>
        <input class="textbox" type="text" name="query" />
        <br><br><input type="submit" value="Search" />
    </form>
</body>