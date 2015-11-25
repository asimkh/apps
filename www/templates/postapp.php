
<?php
	
	require_once('../includes/config.php');

	$name = $_POST['userName'];
	$email = $_POST['userEmail'];
	$subject = $_POST['userSubject'];
	$comments = $_POST['userComments'];

	$email_to="info@hazzir.com";
    $email_subject="HAZ app : " + $subject ;
	$headers  = "From: no-reply@hazzir.com\r\n"."X-Mailer: php\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$headers .= "Bcc: multimedia99@gmail.com\r\n";

	$email_message = 'Name: ' . $name  . "\r\n\r\n";
	$email_message .= 'Email: ' . $email['senderEmail'] . "\r\n\r\n";
	$email_message .= 'Comments: ' . $comments . "\r\n\r\n";
	
	$success = mail($email_to, $email_subject, $email_message);
	echo "Message delivered, We will get back to you soon.";
	}else{
	die('Error in query: '. mysql_error());
	}

?>

