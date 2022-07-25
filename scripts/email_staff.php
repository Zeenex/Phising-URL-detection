<?php



	$fname = $_POST['name'];
	$email = $_POST['mail'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	date_default_timezone_set('Africa/Lagos');

	require_once('PHPMailer_5.2.0/class.phpmailer.php');
	//include("PHPMailer_5.2.0/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

	$mail             = new PHPMailer();


	$mail->IsSMTP(); // telling the class to use SMTP

	$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
	                                           // 1 = errors and messages
	                                           // 2 = messages only
	$mail->SMTPAuth   = true;                  // enable SMTP authentication

	$mail->Host       = "zeenextech.com";      // sets GMAIL as the SMTP server
	$mail->Port       = 26;                   // set the SMTP port for the GMAIL server
	$mail->Username   = "noreply@zeenextech.com";  // GMAIL username
	$mail->Password   = "rootadmin@2022"; 
	$mail->From = "noreply@zeenextech.com";     //Sets the From email address for the message
	$mail->FromName = "PHISDETECT contact page";    //Sets the From name of the message
	$mail->AddAddress("afam@zeenextech.com");//Adds a "To" address



	$mail->Subject    = "A new message from PHISDETECT contact page";
	$mail->IsHTML(true);


	$mail->MsgHTML("

	<html>
	<body>
	<div style='padding: 20px; line-height: 14px; width: 100%;'>

	<p style='font-size: 16px;'><b>A new message sent from PHISDETECT contact page</b></p>
	<br>
	<div style='font-size: 14px;'>

	<p style='font-size: 16px;'><b>Message Details.</b></p>
	<p><b>Name:</b> $fname</p>
	<p><b>Email:</b> $email</p>
	<p><b>Subject:</b> $subject</p>
	<p><b>Message:</b> $message</p>

	</div>
	</body>
	</html>

	");


	if(!$mail->Send()) {
	  echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	  
	  header("Location: ../contact.php?msg=Message has been sent");
	}



?>