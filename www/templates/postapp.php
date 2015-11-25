
<?php

//http://stackoverflow.com/questions/18382740/cors-not-working-php
	if (isset($_SERVER['HTTP_ORIGIN'])) {
        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 86400');    // cache for 1 day
    }

    // Access-Control headers are received during OPTIONS requests
    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
            header("Access-Control-Allow-Headers:        
            {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

        exit(0);
    }

    //http://stackoverflow.com/questions/15485354/angular-http-post-to-php-and-undefined
    $postdata = file_get_contents("php://input");

    if (isset($postdata)) {
		$request = json_decode($postdata);
		$name = $request->userName;
		$email = $request->userEmail;
		$subject = $request->userSubject;
		$comments = $request->userComments;


		if ($name != "") {

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

			//echo "Server returns: " . $username;
		}
		else {
			//echo "Empty username parameter!";
			echo 'Error in query: '. mysql_error();
		}
	}
	else {
		echo "Not called properly with username parameter!";
	}


	
	
	
?>

