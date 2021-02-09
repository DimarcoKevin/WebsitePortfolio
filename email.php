<?php
	if ($_POST) {
		// gathering name, email, and message from contact form
		$name = $_POST['name'];
	  	$email = $_POST['email'];
	  	$message = $_POST['message'] . "\r\n\r\nFrom: " . $name . "\r\n\r\n(This email came from www.kevindimarco.com emailer)";
	  	$from = "contact@kevindimarco.com";

	  	// adding my email and header
	  	$to = "kdblogwebsite@gmail.com";
	  	$subject = "Contact: " . $email;
		$header = "From: " . $from;

	  	// checking that all fields are not null
	  	if (isset($name, $email, $message)) {
		  	// trying to running mail function
		  	if (mail($to, $subject, $message, $header)) {
		  		print "<h2 class='success'>Thanks for the email, " . $name . "! I will contact you shortly.</h2>";
		  	} else {
		  		print "<h2 class='error'>Something went wrong!</h2>";
		  	}
		 }
	}
?>
