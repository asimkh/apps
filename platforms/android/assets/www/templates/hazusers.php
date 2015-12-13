<?php	header('Access-Control-Allow-Origin: *'); ?>
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
            header("Access-Control-Allow-Headers:        {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

        exit(0);
    }
 
    $postdata = file_get_contents("php://input");
	//header('Access-Control-Allow-Origin: *');
	//require_once('../includes/config.php');
	require_once('../includes/config.php');

if (isset($postdata)) {
    $request = json_decode($postdata);
   
    $userName = $request->userName;
    $userEmail = $request->userEmail;

    $userBio = $request->userBio;
    $userBD = $request->userBD;

    $userGender = $request->userGender;
    $userHome = $request->userHome;

    $userLocation = $request->userLocation;
    $userGMT = $request->userGMT;

    $date = new DateTime();
    $date->setTimezone(date_default_timezone_get('Asia/Muscat'));
    $userDate =  $date->format("F j, Y, g:i a e"); 
    $checkquery = mysql_query("SELECT email FROM haz_app_users WHERE email = '$userEmail'");

    if (mysql_num_rows($checkquery) == 0) {

    		$result = mysql_query("INSERT INTO `haz_app_users`(name, about, birthday, gender, email, hometown, location, timezone, status, created) VALUES ('$userName', '$userBio', '$userBD', '$userGender', '$userEmail','$userHome','$userLocation', '$userGMT', 1, NOW())");
    	
			$email_mail = "support@hazzir.com";
			$email_name = 'HAZ';
			$email_from = $email_name.'<'.$email_mail.'>';

    	 	$email_to="haz-app@hazzir.com";
		    $email_subject="HAZ app :: Login details :: " . $userName. " || " . $userDate;
			

			$headers  = "From: ".$email_from."\r\n"."X-Mailer: php\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			$headers .= "Bcc: hellohazzir@gmail.com\r\n";
			
			$email_message = 'Name: ' . $userName  . "\r\n\r\n<br>";
			$email_message .= 'Email: ' . $userEmail . "\r\n\r\n<br>";
			$email_message .= 'About: ' . $userBio . "\r\n\r\n<br>";
			$email_message .= 'Birthday: ' . $userBD . "\r\n\r\n<br>";
			$email_message .= 'Gender: ' . $userGender . "\r\n\r\n<br>";
			$email_message .= 'Home town: ' . $userHome . "\r\n\r\n<br>";
			$email_message .= 'Location: ' . $userLocation . "\r\n\r\n<br>";
			$email_message .= 'Timezone: ' . $userGMT . "\r\n\r\n<br>";
			$success = mail($email_to, $email_subject, $email_message, $headers);

			echo "<p>" . $userName . ", data updated succesfully.\r\n</p>" ;
			
			
		}
		else {
			echo "". $userEmail ." email already exits!";
			die('Error in query: '. mysql_error());
		}
	}
	else {
		echo "Not called properly with username parameter!" ;
	}

    


/*
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
	*/


//echo "lets go!";

?>

