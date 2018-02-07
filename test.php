<?php
$to      = '1102mask.rock@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: mayank.pahan@gmail.com' . "\r\n" .
    'Reply-To: 1102mask.rock@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?> 