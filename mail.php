<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$contact = $_POST['tel'];
$formcontent="From: $name \n Message: $message";
$recipient = "emailaddress@here.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='/myprofile.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
