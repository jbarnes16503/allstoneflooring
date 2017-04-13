<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$EmailTo = "contact@allstoneflooring.co.uk";
$Subject = "All Stone Flooring - New query recieved";

$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Subject: ";
$Body .= $subject;
$Body .= "\n";
$Body .= "\n" ."\n";
$Body .= $message;
$Body .= "\n";
$Body .= "\n";
$Body .= "\n";
$Body .= "This email was automatically generated.";

mail($EmailTo, $Subject, $Body, "From:".$email);

$response .= 'Thank you ' .$name ."\n" ."\n" .'We have recieved your enquiry. A copy has been printed below:' ."\n" ."\n" ."\n" ."\n" .$message ."\n" ."\n" ."\n" ."\n" .'Please allow us up to 24 hours to respond to your query.' ."\n" ."\n" ."\n" .'The All Stone Flooring team';
mail($email, "Your query has been recieved", $response, "From:".$EmailTo);

?>