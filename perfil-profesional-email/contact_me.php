<?php
echo "Cambios";
// Check for empty fields
/*if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
 */  
/*
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
*/

$name = "name";
$email_address = "email@gmail.com";
$phone = "999130638";
$message = "menssage";

$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
   
// Create the email and send the message
<<<<<<< HEAD
$to = 'heber.daniel.ramos.mendoza@gmail.com'; 
// Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form: ";
$email_body = "Prueba"; 
// This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "From: Geeky Theory heber.ramos.mendoza@gmail.com \r\n";   

=======
$to = 'heber.daniel.ramos.mendoza@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: heber.daniel.ramos.mendoza@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
>>>>>>> 7abe4e90904dd3d32a6a907486455f57c271b554
mail($to,$email_subject,$email_body,$headers);
return true;         
?>
