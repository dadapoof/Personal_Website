<?php

if($_POST["submit"]) {
	$recipient="damassart@aol.com";
	$subject="Website Contact Form Message";
	$sender=$_POST["fullname"];
	$senderEmail=$_POST["email"];
	$message=$_POST["textarea"];

	$mailBody="Name: $fullname\nEmail: $email\n\n$textarea";

	mail($recipient, $subject, $mailBody, "From: $name <$email>");

	$thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>
