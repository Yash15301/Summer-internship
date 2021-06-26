<?php

// echo '<pre>';
// print_r($_POST);

if(isset($_POST['submit']))
{
	$fullname = $_POST["fullname"];
	$email    = $_POST["email"];
	$contact  = $_POST["contact"];
}
	
?>


<html>
<head>
	<title>User Input Example</title>
</head>
<body>
	<form method="post">
	<table border="1" align="center" cellpadding="10" cellspacing="0">
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
			<td colspan="2" align="center"><input type="submit" id="submit" name="submit" value="Submit"></td>
		</tr>
	</table>
</form>
<br/>
<br/>

<table border="1" align="center" cellpadding="10" cellspacing="0">
		<tr>
			<td>FullName</td>
			<td><?php  if(isset($fullname)) echo $fullname; ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><?php  if(isset($email)) echo $email; ?></td>
		</tr>
		<tr>
			<td>Contact</td>
			<td><?php  if(isset($contact)) echo $contact; ?></td>
		</tr>
		
	</table>
</body>
</html>



