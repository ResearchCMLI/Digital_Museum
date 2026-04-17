<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['visitor_mail'];
  $subject =$_POST['subject'];
  $message = $_POST['message'];
  
  $email_from = 'preethi_cs@avinuty.ac.in';

  	$email_subject = "New Form submission from Digital Museum";

	$email_body = "You have received a new message from the user $name.\n".
							"Regarding:$subject\n".
                            "Here is the message:\n $message".
							
							
	$to = "rd.preethib@gmail.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);
  
  ?>