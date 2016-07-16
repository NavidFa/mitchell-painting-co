<?php
  $name = $_POST['name'];
  $phonenumber = $_POST['phonenumber'];
  $email = $_POST['email'];
  $message = $_POST['message'];
 
  $to = "justinadamfree@gmail.com";
  $subject = "Request for free estimate";
  $emailcontent = "From: $name \n\n $phonenumber\n\n $message";
  $mailheader = "From: $email";
 
  mail($to, $subject, $emailcontent, $mailheader) or header('Location: emailerror.html');
  header('Location: thank-you.html');
?>