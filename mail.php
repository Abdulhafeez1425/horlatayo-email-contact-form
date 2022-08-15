<?php

$name =$_POST['name'];
$email =$_POST['email'];
$phone =$_POST['phone'];
$subject =$_POST['subject'];
$message =$_POST['message'];

$header = "From: ".$name."<"$email.">\r\n";
$to = "abdulhafeezolabisi973@gmail.com";
 
mail($to, $phone, $subject, $message, $header)
or die("Error: Message is not Sent");

echo "Message Sent"

?>