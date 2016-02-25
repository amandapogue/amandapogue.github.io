<?php
 
     
     
$name = $_POST['name'];
$email = $_POST['email'];
$name2 = $_POST['name2'];
$phone = $_POST['phone'];
$cname = $_POST['cname'];
$dob = $_POST['dob2'];
$cname2 = $_POST['cname2'];
$dob2 = $_POST['dob2'];
$comment = $_POST['comment'];

?>
 
     
 <?php
    $email_from = 'apogue@mail.bcs.rochester.edu';
 
    $email_subject = "New Form submission";
 
$email_body = "Name: $name \n
Email: $email \n
Phone: $phone \n
2nd Parent name: $name2 \n
Kid 1: $cname \n
DOB: $dob \n
Kid 2: $cname2 \n
DOB: $dob2.
?>
 
<?php
 
  $to = "apogue@mail.bcs.rochester.edu";
 
  $headers = "From: $email \r\n";
 
  $headers .= "Reply-To: $email \r\n";
 
  mail($to,$email_subject,$email_body,$headers);
 
 ?>
