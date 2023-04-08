<?php

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    $to = "ethanrscott@hotmail.com";
    $subject = "New message from " . $_POST['name'];
    $message = "Name: " . $_POST['name'] . "\r\n";
    $message .= "Email: " . $_POST['email'] . "\r\n";
    $message .= "Message: " . $_POST['message'] . "\r\n";
    $headers = "From: " . $_POST['email'] . "\r\n";
    $headers .= "Reply-To: " . $_POST['email'] . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";
    if(mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Sorry, there was a problem sending your message.";
    }
}

?>
