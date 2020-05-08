<!DOCTYPE html>
<html>
<body>
<?php
if($_POST["submit"]) {
    $recipient="arvindsane@gmail.com";
    $subject="Incoming Sales Order";
    $sender=$_POST["element_1"];
    $senderEmail=$_POST["element_2"];
    $message=$_POST["element_5"];
    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";
    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
    $thankYou="<p>Thank you! Your message has been sent.</p>";
}
?>
</body>
</html>