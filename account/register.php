<?php

include 'connection.php';

if(isset($_POST["submit"]))
{
	$fullname  = $_POST["fullname"];
	$email     = $_POST["email"];
	$contact   = $_POST["contact"];
	$address   = $_POST["address"];
	$password  = $_POST["password"];
	$cpassword = $_POST["cpassword"];

	if($password == $cpassword)
	{
		// Data Store
		$exe = $obj->query("insert into register(fullname,email,contact,address,password) values('$fullname','$email','$contact','$address','$password')");

		if($exe)
		{
			echo "You have Registered Successfully";
		}
		else
		{	
			echo "Error Hai...";
		}
		

	}
	else
	{
		echo "Password and Confirm Password are not matched";
	}
}





?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="reg.css">
</head>
<body>
	<div class="header">
		<h1>Register Here!!</h1>
	</div>

	<div class="content">
		<form method="post" style="margin-top: 30px">
			<table align="center" cellpadding="10" cellspacing="0">
				<tr>
					<td>FullName</td>
					<td><input type="text" id="fullname" name="fullname"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" id="email" name="email"></td>
				</tr>
				<tr>
					<td>Contact</td>
					<td><input type="text" id="contact" name="contact"></td>
				</tr>
				<tr>
					<td>Address</td>
					<td>
						<textarea id="address" name="address"></textarea>
					</td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" id="password" name="password"></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="password" id="cpassword" name="cpassword"></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" id="submit" name="submit" value="Get Register"></td>
				</tr>
			</table>
		</form>
	</div>

	<div class="footer">
		<h3>All Rights Reserved By CreArt Solutions</h3>
	</div>
</body>
</html>