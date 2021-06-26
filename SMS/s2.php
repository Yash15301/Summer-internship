<?php

if(isset($_POST["submit"]))
{
		$contact = $_POST["contact"];

		$fields = array(
						    "sender_id" => "TXTIND",
						    "message" => "Welcome to Summer Internship. Regards CreArt Solutions",
						    "route" => "v3",
						    "numbers" => "$contact",
						);

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_SSL_VERIFYHOST => 0,
		  CURLOPT_SSL_VERIFYPEER => 0,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => json_encode($fields),
		  CURLOPT_HTTPHEADER => array(
		    "authorization: qeBhj1T9c0dypOXL6fso3Rni2Il7PFAbQgDSMJ5kW8ZtxvVHwuQ2hSCvWYMFpq5U7zrIJd4LfEGjPNTl",
		    "accept: */*",
		    "cache-control: no-cache",
		    "content-type: application/json"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) 
		{
		  //echo "cURL Error #:" . $err;
		  echo "<script>alert('Something went wrong')</script>";
		} 
		else
		{
		    //echo $response;
		    echo "<script>alert('SMS sent successfully')</script>";
		}
	
}





?>
<!DOCTYPE html>
<html>
<head>
	<title>SMS APP</title>
	<link rel="stylesheet" type="text/css" href="s2.css">
</head>
<body>
	<div class="header">
		<h1>SMS APPLICATION</h1>
	</div>

	<div class="content">
		<form method="post" style="margin-top: 90px">
			<table align="center" cellpadding="10" cellspacing="0">
				
				<tr>
					<td>Mobile Number :</td>
					<td><input type="text" id="contact" name="contact"></td>
				</tr>
				
				<tr>
					<td colspan="2" align="center">
						<input type="submit" id="submit" name="submit" value="Send SMS"></td>
				</tr>
			</table>
		</form>
	</div>

	<div class="footer">
		<h3>All Rights Reserved By CreArt Solutions</h3>
	</div>
</body>
</html>