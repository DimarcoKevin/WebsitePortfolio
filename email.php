<?php
	if ($_POST) {
		// gathering name, email, and message from contact form
			$name = $_POST['name'];
	  	$email = $_POST['email'];
	  	$message = $_POST['message'] . "\r\n\r\nFrom: " . $name;
	  	$from = "contact@kevindimarco.com";

	  	// adding my email and header
	  	$to = "kevin.j.dimarco@gmail.com";
	  	$header = "From: " . $from;
	  	$subject = "Contact: " . $email;

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
