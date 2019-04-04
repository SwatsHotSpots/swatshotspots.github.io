<?php

if($_POST["submit"]) {
    $recipient="swatshotspots@gmail.com";
    $subject=$_POST["subject"];
    $sender=$_POST["author"];
    $senderEmail=$_POST["email"];
    $message=$_POST["text"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    <!-- $thankYou="<p>Thank you! Your message has been sent.</p>"; -->
}
?>
<!-- PHP for sending form data as email-->
