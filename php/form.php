<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// SUBJECT
if (empty($_POST["subject"])) {
    $errorMSG .= "Subject is required ";
} else {
    $subject = $_POST["subject"];
}


// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}


//Put Your respective Email at $EmailTO 

$EmailTo = "contact@allstoneflooring.co.uk";
$Subject = "All Stone Flooring - New query recieved";

// prepare email body text
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

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
// send thank you email
$response .= 'Thank you ' .$name ."\n" ."\n" .'We have recieved your enquiry. A copy has been printed below:' ."\n" ."\n" ."\n" ."\n" .$message ."\n" ."\n" ."\n" ."\n" .'Please allow us up to 24 hours to respond to your query.' ."\n" ."\n" ."\n" .'The All Stone Flooring team';
mail($email, "Your query has been recieved", $response, "From:".$EmailTo);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>