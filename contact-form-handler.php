<?php
$name = $_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['message'];

$email_form='EasyTutoarials@avinashkr.com';
$email_subject="New Form Submission";
$email_body="User Nmae; #name.\n".
"User Email:$visitor_email.\n";
$to="veleanubiancamihaela@yahoo.com";
$headers="From: $email_from \r\n";
mail($to,$email_subject,$email_body,$headers);
header(Location: index.html");
?>