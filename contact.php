<?php

$errorMSG = "";

// First Name
if (empty($_POST["fname"])) {
    $errorMSG .= "First Name is required. ";
} else {
    $fname = $_POST["fname"];
}

// Last Name
if (empty($_POST["lname"])) {
    $errorMSG .= "Last Name is required. ";
} else {
    $lname = $_POST["lname"];
}

// Email
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required. ";
} else {
    $email = $_POST["email"];
}

// Phone
if (empty($_POST["phone"])) {
    $errorMSG .= "Phone is required. ";
} else {
    $phone = $_POST["phone"];
}

// Message
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required. ";
} else {
    $message = $_POST["message"];
}

$subject = 'New Contact Inquiry from Website';

// Recipient Email
$EmailTo = "rich@odysseycdi.com";

// Email Body
$Body = "First Name: $fname\n";
$Body .= "Last Name: $lname\n";
$Body .= "Email: $email\n";
$Body .= "Phone: $phone\n";
$Body .= "Message: $message\n";

// Headers
$headers = "From: yashikayeshi@gmail.com\r\n";
$headers .= "Reply-To: $email\r\n";

// Send Message
$success = mail($EmailTo, $subject, $Body, $headers);

if ($success && $errorMSG == ""){
    header("Location: thankyou.html");
    exit;
} else {
    echo $errorMSG == "" ? "Something went wrong :(" : $errorMSG;
}

?>
