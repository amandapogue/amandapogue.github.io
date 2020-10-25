<?php

#Receive user input
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];

#Send email
$headers = "From: $email_address";
$sent = mail('amanda.pogue@gmail.com', 'Contact Form Submission', $name, $email_address, $message);

#Thank user or notify them of a problem
if ($sent) {

echo 'Thanks for sending me a message!'

} else {
echo 'Please try again.'
}
?>