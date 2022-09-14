<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];


$email_from='info@yourwebsite.com';
$email_subject='Nuevo Contacto de Página web';
$email_body="User Name: $name.\n".
               "User email: $email.\n".
               "User subject: $subject.\n".
               "User message: $message.\n";

$to ='alejandronjj2@gmail.com';

$headers="From: $email_from \r\n";
$headers="Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

$header("Location: contact.html")

?>