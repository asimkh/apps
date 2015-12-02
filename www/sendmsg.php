<?php
require_once('includes/config.php');
require_once('includes/phpmailer/class.phpmailer.php');

$friendname = $_REQUEST['friendName'];
$friendemail = $_REQUEST['friendEmail'];
$name = $_REQUEST['yourName'];
$email = $_REQUEST['yourEmail'];
$page = $_REQUEST['page'];

$result = mysql_query("INSERT INTO `contacts`(name, email, friend_name, friend_email, created) VALUES ('$name', '$email', '$friendname', '$friendemail', NOW())");

switch($page){
	case 'tip1':
	$subject = $name.' wants to share a tip on staying hydrated.';
	$file = 'cartoon/index-fish.php';
	break;
	
	case 'tip2':
	$subject = $name.' wants to share a simple solution for mental energy';
	$file = 'cartoon/index-gum.php';
	break;
	
	case 'tip3':
	$subject = $name.' wants to share a great tip to keep your youthful looks';
	$file = 'cartoon/index-laughs.php';
	break;
	
	case 'tip4':
	$subject = $name.' wants to share the healthy bread choice for your next sandwich';
	$file = 'cartoon/index-bread.php';
	break;
	
	case 'tip5':
	$subject = $name.' wants to share a simple tip for healthy hair';
	$file = 'cartoon/index-fisherman.php';
	break;
	
	case 'tip6':
	$subject = $name.' wants to share a tip on building brainpower while building brawn';
	$file = 'cartoon/index-bike.php';
	break;
	
	case 'index-bread':
	$subject = $name.' wants to share the healthy bread choice for your next sandwich';
	$file = 'newsletter/index-bread.php';
	break;
	
	case 'index-fisherman':
	$subject = $name.' wants to share a simple tip for healthy hair';
	$file = 'newsletter/index-fisherman.php';
	break;
	
	case 'index-bike':
	$subject = $name.' wants to share a tip on building brainpower while building brawn';
	$file = 'newsletter/index-bike.php';
	break;
	
	case 'home_share':
	default:
	$subject = $name.' wants to share a tip on building brainpower while building brawn';
	$file = 'newsletter/home_share.php';
	break;
	
	
}

if($result){

$mail = new PHPMailer();

$mail->IsSMTP();                                      											
/*
$mail->Host = "smtp.gmail.com";  																
$mail->SMTPAuth = true;     																		
$mail->Username = "mrmdubai.fb@gmail.com";  	
$mail->Password = "Password-1"; 	
$mail->Port = 465;   			
$mail->SMTPSecure = "tls";  	
*/

$mail->Host = "eu-smtp-outbound-1.mimecast.com";  																
$mail->SMTPAuth = true;     																		
$mail->Username = "fw-health@mccannhealth.ae";  	
$mail->Password = "Hive@Level5"; 	
$mail->Port = 25;   			

$mail->From = "fw-health@mccannhealth.ae";
$mail->FromName = "FW:HEALTH by McCann Health";
$mail->AddAddress( $friendemail, $friendname);
$mail->IsHTML(true);                                  				

$mail->Subject = "$subject";

//var_dump($file);
ob_start();
include_once($file);
$mail->Body = ob_get_contents();
ob_end_clean();

if($mail->send()){
	echo "answer=success";		
}else{
	echo "There was an error sending your message: ".$mail->ErrorInfo;
}

}else{
	die('Error saving contacts');
}

?>