
<?php

if (isset($_POST['submit'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$message =$_POST['message'];

$headers = 'From: apogue@ur.rochester.edu'  . "\r\n";
$headers .= 'Reply-To: apogue@ur.rochester.edu' ."\r\n";
 $email_subject = "Qualtrics Tutorial Query";
 
$email_body = 'Name: ' .$name."\n";
$email_body .= 'Email: ' .$email."\n";
$email_body .= 'Message: ' .$message."\n";


 
  $to = 'apogue@ur.rochester.edu';
 
  $headers = 'From: $email \r\n';
 
  $headers = 'Reply-To: $email \r\n';
 
  mail($to,$email_subject,$email_body,$headers);
  
  echo "Thank you! Your message has been submitted. We'll be in touch soon!";
  header( "refresh:6; url=index.html" );
  }
  
 
 ?>
