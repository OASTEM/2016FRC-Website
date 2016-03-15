<?php
session_start();
$from = $_POST["from"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$message = "Message from $from ($email):\n\n" . $message;

$location = "Location: https://frc4079.org/contact/";
// Check if the token was submitted, and if the session has the token.
if (empty($_SESSION['token']) || empty($_POST['token'])) {
    $_SESSION["flash"] = "An error occured";
	exit();
}
if ($_SESSION['token'] != $_POST['token']) {
    $_SESSION["flash"] = "An authentication error occured";
} else if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$_SESSION['token'] = ""; // Invalidate token.
    mail ("contact@frc4079.org", $subject, $message);
    $_SESSION["flash"] = "Sent!";
}
else{
    $_SESSION["flash"] = "Please enter a valid email address";
}
header($location);
?>