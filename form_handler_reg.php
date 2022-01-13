<?php
$name = $_POST["name"];
$ig_name = $_POST["ig_name"];
$id = $_POST["id"];
$visitor_email = $_POST["email"];
$number = $_POST["number"];
$category = $_POST["dropdown"];

$email_from = 'info@btfesports.com';

$email_subject = 'New Query Submission';

$email_body = "User Name: $name\n".
              "In Game Name: $ig_name\n".
              "In Game ID: $id\n".
              "Subject: $number\n".
              "Message: $category\n".
              "User Email: $visitor_email\n";

$to = 'barathlakshman06@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-T0: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index3.html");


?>
