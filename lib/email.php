<?php
require_once("common.php");
require_once("Mail.php");

$email   = scrubStringInput($_POST["email"]);
$message = scrubStringInput($_POST["message"]);
$name	= scrubStringInput($_POST["name"]);
$subject = scrubStringInput($_POST["subject"]);

if(verifyCaptcha($_POST["recaptcha_challenge_field"], $_POST["recaptcha_response_field"]) === false)
{
	echo "<div class=\"alert alert-danger\" role=\"alert\"><strong>Oh snap!</strong> Wrong captcha. Verify the captcha and try again.</div>";
	exit;
}

/* convert hard newlines to HTML <br /> tags */
$message = str_replace("\r", "", $message);
$message = str_replace("\n", "<br />", $message);

/* set static variables */
$destinationEmail = "sim@vsfs.org";
$from			 = "$name <$email>";
$dateTime		 = new DateTime();

/* build Email headers */
$headers				 = array();
$headers["To"]		   = $destinationEmail;
$headers["From"]		 = $from;
$headers["Reply-To"]	  = $from;
$headers["Subject"]	  = $subject;
$headers["MIME-Version"] = "1.0";
$headers["Content-Type"] = "text/html; charset=UTF-8";

/* build the body of the message */
$emailBody  = "<html>\r\n<body>\r\n";
$emailBody .= "<h1>$subject</h1>\r\n";
$emailBody .= "<hr />\r\n";
$emailBody .= "<p>$message</p>\r\n";
$emailBody .= "<hr />\r\n";
$emailBody .= "<p>Browser: " . $_SERVER["HTTP_USER_AGENT"]	  . "<br />\r\n";
$emailBody .= "IP Address: " . $_SERVER["REMOTE_ADDR"]		  . "<br />\r\n";
$emailBody .= "Time Sent: "  . $dateTime->format("Y-m-d H:i:s") . "</p>\r\n";
$emailBody .= "</body>\r\n";
$emailBody .= "</html>";

error_reporting(E_ALL & ~E_STRICT);
$mailer =& Mail::factory("sendmail");
$status = $mailer->send($destinationEmail, $headers, $emailBody);
if(PEAR::isError($status) === true)
{
	echo "<div class=\"alert alert-danger\" role=\"alert\"><strong>Oh snap!</strong> Unable to send mail message:" . $status->getMessage() . "</div>";
}
else
{
	echo "<div class=\"alert alert-success\" role=\"alert\"><strong>Mail sent!</strong> Email successfully sent.</div>";
}
?>
