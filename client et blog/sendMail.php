<?php
function sendMail(){
$to = $_POST['to'];
$subject = 'Mail Verification';
$message = $_POST['message'];
$headers = "From: yosri.ghaba@esprit.tn\r\n";
if (mail($to, $subject, $message, $headers)) {
   echo "SUCCESS";
}
 else {
   echo "ERROR";
}
}
   ?>