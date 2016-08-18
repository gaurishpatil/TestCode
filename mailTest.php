<?php
error_reporting(-1);
ini_set("SMTP","smtpout.secureserver.net");
require_once "Mail.php";

function emailHtml($from, $subject, $message, $to) {
$host = "smtpout.secureserver.net";
$username = "contact@firstdateli.com";
$password = "Contact!@#4";

$headers = array ('MIME-Version' => "1.0", 'Content-type' => "text/html; charset=iso-8859-1;", 'From' => $from, 'To' => $to, 'Subject' => $subject);

$smtp = Mail::factory('smtp', array ('host' => $host, 'auth' => false));

$mail = $smtp->send($to, $headers, $message);
if (PEAR::isError($mail))
return 0;
else
return 1;
}



$to = "gaurishpatil@gmail.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "contact@firstdateli.com";
$headers = "From:" . $from;
if(mail($to,$subject,$message,$from))
echo "Mail Sent.";
else
echo "Mail Not Sent.";
?>