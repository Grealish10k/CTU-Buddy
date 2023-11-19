<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "your@email.com"; // Change this to your email address
    $subject = "Contact Us Form Submission";
    $headers = "From: $email";
    $message_body = "Name: $name\nEmail: $email\nMessage:\n$message";

    if (mail($to, $subject, $message_body, $headers)) {
        echo "Thank you for your message. We'll be in touch soon.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
