<?php

$errorMSG = "";

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

//Put Your respective Email at $EmailTO 

$EmailTo = "contact@allstoneflooring.co.uk";
$Subject = "All Stone Flooring - New quick contact recieved";

// prepare email body text
$Body = "";
$Body .= "Quick contact request from: ";
$Body .= $email;
$Body .= "\n";

// send email
mail($EmailTo, $Subject, $Body, "From:".$email);
// send thank you email
$response .= 'Thank you for registering your interest' ."\n" ."\n" .'If your enquiry is urgent then please contact us on 01342 826191. We will however be in touch within the next hour' ."\n" ."\n" ."\n" .'The All Stone Flooring team';
mail($email, "Your email address has been recieved", $response, "From:".$EmailTo);

?>