<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "eric.s.chen.98@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
@mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header('Location: contact.html');
?>