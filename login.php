<?php

$name = $_POST["name"];
$from = $_POST["email"];
$message = $_POST["message"];

// Prepare the email
// You can customize these data accordingly
$subject = "New message from " . $name;
$to = "quierramarriott@gmail.com";

// Lets send the mail
if(mail($to, $subject, $message, $from)) {
    echo "Sent";
}  else {
    echo "Failed";
}
?>