<?php
$name = $_POST["name"];
$visitor_email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$email_from = 'info@btfesports.pages.dev';

$email_subject = 'New Query Submission';

$email_body = "User Name: $name\n".
              "User Email: $visitor_email\n".
              "Subject: $subject\n".
              "Message: $message\n";

$to = 'barathlakshman06@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-T0: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index3.html");

?>
