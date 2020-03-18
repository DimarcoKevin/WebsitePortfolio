<?php
	// gathering name, email, and message from contact form
	$name = $_POST['name'];
  	$visitor_email = $_POST['email'];
  	$message = $_POST['message'];


  	// adding my email and header
  	$to = "kevin.j.dimarco@gmail.com";
  	$header = "From: $visitor_email";
  	$subject = "Email from kevindimarco.com"

  	mail($to, $subject, $message, $header);

?>