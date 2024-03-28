<?php
session_start();
$to_email = $_SESSION['email'];
$subject = "Order Status";
$body = "Your Order Has Been Placed Please Wait For 2 Days.
You will receive your order soon.
Thanks For Using Our Services.";
$headers = "from: emmadhamid5655@gmail.com";
if (mail($to_email, $subject, $body, $headers)) {
   // ini_set('smtp','gmail.com');
    //ini_set('smtp_port','25');
echo "Email successfully sent to $to_email...";
} else {
echo "Email sending failed...";
} 

?>