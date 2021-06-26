<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

if(isset($_POST["submit"]))
{
	
	$email   = $_POST["email"];
	$message = $_POST["message"];

	try 
	{
	    //Server settings
	    $mail->SMTPDebug = FALSE;                      //Enable verbose debug output
	    $mail->isSMTP();                                            //Send using SMTP
	    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
	    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
	    $mail->Username   = 'projecttraining0780@gmail.com';                     //SMTP username
	    $mail->Password   = 'Project@123';                               //SMTP password
	    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
	    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

	    //Recipients
	    $mail->setFrom('projecttraining0780@gmail.com', 'Summer Internship');
	    $mail->addAddress("$email", '');     //Add a recipient
	    // $mail->addAddress('ellen@example.com');               //Name is optional
	    // $mail->addReplyTo('info@example.com', 'Information');
	    // $mail->addCC('cc@example.com');
	    // $mail->addBCC('bcc@example.com');

	    //Attachments
	    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
	    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

	    //Content
	    $mail->isHTML(true);                                  //Set email format to HTML
	    $mail->Subject = 'Summer Internship Batch - 1';
	    $mail->Body    = "$message";
	    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	    $mail->send();
	    echo "<script>alert('Message has been sent')</script>";
	} 
	catch (Exception $e) 
	{
    	 echo "<script>alert('Error in Email Sending')</script>";
	}
	
}





?>
<!DOCTYPE html>
<html>
<head>
	<title>EMAIL APP</title>
	<link rel="stylesheet" type="text/css" href="email1.css">
</head>
<body>
	<div class="header">
		<h1>EMAIL APPLICATION</h1>
	</div>

	<div class="content">
		<form method="post" style="margin-top: 60px">
			<table align="center" cellpadding="10" cellspacing="0">
				
				<tr>
					<td>To</td>
					<td><input type="text" id="email" name="email"></td>
				</tr>
				
				<tr>
					<td>Message</td>
					<td>
						<textarea id="message" name="message"></textarea>
					</td>
				</tr>
				
				<tr>
					<td colspan="2" align="center">
						<input type="submit" id="submit" name="submit" value="Send Email">
					</td>
				</tr>
			</table>
		</form>
	</div>

	<div class="footer">
		<h3>All Rights Reserved By CreArt Solutions</h3>
	</div>
</body>
</html>