<?php
$to = "embalu71@gmail.com";
$subject = "Sample Test Github";
$message = "Sample Test";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <passhere2019@gmail.com>' . "\r\n";
mail($to,$subject,$message,$headers);
echo "Mail";
?>