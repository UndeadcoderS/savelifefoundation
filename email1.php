<?php

error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_STRICT);

set_include_path("." . PATH_SEPARATOR . ($UserDir = dirname($_SERVER['DOCUMENT_ROOT'])) . "/pear/php" . PATH_SEPARATOR . get_include_path());
require_once "Mail-1.4.1\Mail.php";

$host = "ssl://smtp.gmail.com";
$username = "chinu2gs@gmail.com";
$password = "gswinner2";
$port = "535";
switch ($nh)
{
	case 'NH1':$to = "amansingh1988secr@gmail.com";break;
	case 'NH2':$to = "chinu2gs@gmail.com";break;
	case 'NH3':$to = "harshit.145x@gmail.com";break;
	case 'NH4':$to = "devinzgamer@gmail.com";break;
	case 'NH5':$to = "surendra1998223@gmail.com";break;
	case 'NH6':$to = "chinu1998223@gmail.com";break;
	case 'NH7':$to = "grkbittu@gmail.com";break;
	default: echo "Server error! email cant be sent";break;
}
$email_from = $username;
$email_subject = "request no:" ;
$email_body = $email."\n".$name."\n".$mno."\n".$local."\n".$nh."\n".$dist."\n".$pcode."\n".$cmt;
$email_address = $email;

$headers = array ('From' => $email_from, 'To' => $to, 'Subject' => $email_subject, 'Reply-To' => $email_address);
$smtp = Mail::factory('smtp', array ('host' => $host, 'port' => $port, 'auth' => true, 'username' => $username, 'password' => $password));
$mail = $smtp->send($to, $headers, $email_body);


if (PEAR::isError($mail)) {
echo("<p>" . $mail->getMessage() . "</p>");
} else {
echo("<p>Message successfully sent!</p>");
}
?>