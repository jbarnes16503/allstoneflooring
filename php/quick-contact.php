<?php

// NAME
$name = $_POST["quickname"];

// EMAIL
$phone = $_POST["quickphone"];

//Put Your respective Email at $EmailTO 

$EmailTo = "contact@allstoneflooring.co.uk";
$Subject = "All Stone Flooring - New call back request";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Contact number: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "\n";
$Body .= "This email was automatically generated.";

// send email
mail($EmailTo, $Subject, $Body);

?>