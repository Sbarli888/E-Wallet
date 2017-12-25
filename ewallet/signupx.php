 <?php


if(count($_POST)>0) {
	
	$category = $_POST['category'];
	
	/* Form Required Field Validation */
	foreach($_POST as $key=>$value) {
	if(empty($_POST[$key])) {
	$message = ucwords($key) . " field is required";
	break;
	}
	}
	/* Password Matching Validation */
	if($_POST['password'] != $_POST['confirm_password']){ 
	$message = 'Passwords should be same<br>'; 
	}

	/* Email Validation */
	if(!isset($message)) {
	if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
	$message = "Invalid UserEmail";
	}
	}

	

	/* Validation to check if Terms and Conditions are accepted */
	if(!isset($message)) {
	if(!isset($_POST["terms"])) {
	$message = "Accept Terms and conditions before submit";
	}
	}

	if(!isset($message)) {
		
		
		
		if($_POST['category'] == "consumer")		{
			require_once("dbcontroller.php");
			$db_handle = new DBController();
			$query = "INSERT INTO consumer (cons_uname, cons_name, cons_email, cons_pass, cons_phone, status) VALUES
			('" . $_POST["userName"] . "', '" . $_POST["fullname"] . "', '" . $_POST["email"] . "', '" . ($_POST["password"]) . "', '" . $_POST["phone"] . "', 'Not approved')";
			$result = $db_handle->insertQuery($query);
			if(!empty($result)) {
				$message = "You have registered successfully!";	
				unset($_POST);
			} else {
				$message = "Problem in registration. Try Again!";	
		}}
		
		else if($_POST['category'] =="vendor")		{
			require_once("dbcontroller.php");
			$db_handle = new DBController();
			$query = "INSERT INTO vendor (vendor_uname, vendor_name, vendor_email, vendor_pass, vendor_phone, status) VALUES
			('" . $_POST["userName"] . "', '" . $_POST["fullname"] . "', '" . $_POST["email"] . "', '" . ($_POST["password"]) . "', '" . $_POST["phone"] . "', 'Not approved')";
			$result = $db_handle->insertQuery($query);
			if(!empty($result)) {
				$message = "You have registered successfully!";	
				unset($_POST);
			} else {
				$message = "Problem in registration. Try Again!";	
		}}
		
	}
	
	/*if(!isset($message)) {
		require_once("dbcontroller.php");
		$db_handle = new DBController();
		$query = "INSERT INTO consumer (cons_uname, cons_name, cons_email, cons_pass, cons_phone, status) VALUES
		('" . $_POST["userName"] . "', '" . $_POST["fullname"] . "', '" . $_POST["email"] . "', '" . ($_POST["password"]) . "', '" . $_POST["phone"] . "', 'Not approved')";
		$result = $db_handle->insertQuery($query);
		if(!empty($result)) {
			$message = "You have registered successfully!";	
			unset($_POST);
		} else {
			$message = "Problem in registration. Try Again!";	
		}
	}*/
}
?>

<html>
<head>
<title>PHP User Registration Form</title>
<style>
@font-face { font-family: JuneBug; src: url('Heroes Legend.ttf'); } 
h1 {
font-family: JuneBug

}
table {
    color: white;
}
.message {color: ffffff;font-weight: bold;text-align: center;width: 100%;padding: 10;}
body{width:610px;}
.demo-table {width: 100%;border-spacing: initial;margin-left:60%; 
    margin-right:auto;	word-break: break-word;table-layout: auto;line-height:1.8em;color:#333;}
.demo-table td {padding: 20px 15px 10px 35px;}
.demoInputBox {padding: 7px;border: #F0F0F0 1px solid;border-radius: 4px;margin-left:60%; 
    margin-right:auto;}
.btnRegister {padding: 10px;background-color: #09F;margin-left:100%; 
    margin-right:auto;border: 0;color: #FFF;cursor: pointer;}


</style>
</head>
<body  background="walao.jpg">

<form name="frmRegistration" method="post" action="">
<center>
<table border="0" width="500" align="center" class="demo-table">
<td><font color="white"><h1>REGISTER</h1></font></td><br>
<div align="center" class="message"><?php if(isset($message)) echo $message; ?></div>
<tr>
<td>
 <input type="radio" name="category" value="consumer" >     <font color="white">Customer</font> </td>
 <td><input type="radio" name="category" value="vendor"> <font color="white">Vendor</vendor><br></td></tr>

<tr>
<td><font color="white">Username</font></td>
<td><input type="text" class="demoInputBox" name="userName" value="<?php if(isset($_POST['cons_uname'])) echo $_POST['cons_uname']; ?>"></td>
</tr>
<tr>
<td><font color="white">Password</font></td>
<td><input type="password" class="demoInputBox" name="password" value=""></td>
</tr>
<tr>
<td><font color="white">Confirm Password</font></td>
<td><input type="password" class="demoInputBox" name="confirm_password" value=""></td>
</tr>
<tr>
<td><font color="white">Full Name</font></td>
<td><input type="text" class="demoInputBox" name="fullname" value="<?php if(isset($_POST['cons_name'])) echo $_POST['cons_name']; ?>"></td>
</tr>
<tr>
<td><font color="white">Email</font></td>
<td><input type="text" class="demoInputBox" name="email" value="<?php if(isset($_POST['cons_email'])) echo $_POST['cons_email']; ?>"></td>
</tr>
<tr>
<td><font color="white">Phone. No</font></td>
<td><input type="text" class="demoInputBox" name="phone" value="<?php if(isset($_POST['cons_phone'])) echo $_POST['cons_phone']; ?>"></td>

</tr>

<tr>

<td><input type="checkbox" name="terms"><font color="white"> I accept Terms and Conditions</font>
</tr>
</table>
<div>
<input type="submit" name="submit" value="Register" class="btnRegister">
</div>

</center>
</form>

</body></html>