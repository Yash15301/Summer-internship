<?php

include 'connection.php';

$id = $_GET["userid"];

$result = $obj->query("select * from register where id='$id'");

$row = $result->fetch_object();

?>



<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
	<div class="header">
		<h1>Summer Internship -1 </h1>
	</div>

	<div class="content">
		<div class="content-left">
			<ul>
				<li><a href="home.php">HomePage</a></li>
				<li><a href="">About Us</a></li>
				<li><a href="register.php">Register</a></li>
				<li><a href="">Contact Us</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="login.php">Logout</a></li>
			</ul>
		</div>
		<div class="content-right">
			<p>User ID   : <?php echo $row->id;?></p>
			<p>Full Name : <?php echo $row->fullname;?></p>
			<p>Email     : <?php echo $row->email;?></p>
			<p>Contact   : <?php echo $row->contact;?></p>
			<p>Address   : <?php echo $row->address;?></p>
		</div>
	</div>

	<div class="footer">
		<h3>All Rights Reserved By CreArt Solutions</h3>
	</div>
</body>
</html>