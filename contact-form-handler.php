<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email_subject = 'New Form Submission';
    $visitor_email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    $email_body = "Name: $name.\n" . "Email: $visitor_email.\n" . "Phone Number: $phone.\n". "Message: $message.\n";

    $mailTo = 'jerandev@outlook.com';
    $headers = "From: forms@jerandev.com \r\n";
    $txt = "You have received an e-mail from $name. \n\n$email_body";

    mail($mailTo, $email_subject, $txt, $headers);
    header("Location: index.html");
}
?>
