<?php
	if ($_POST) {
		// gathering name, email, and message from contact form
		$name = $_POST['name'];
	  	$email = $_POST['email'];
	  	$message = $_POST['message'];


	  	// adding my email and header
	  	$to = "kevin.j.dimarco@gmail.com";
	  	$header = "From: " . $email;
	  	$subject = "Contact email from portfolio site";

	  	// trying to running mail function
	  	if (mail($to, $subject, $message, $header)) {
	  		echo "<h4>Thanks for the email, " . $name . "! We will contact you shortly.</h4>";
	  	} else {
	  		echo "Something went wrong!";
	  	}
	}
?>
