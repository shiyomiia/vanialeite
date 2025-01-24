<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "your-email@example.com";
    $subject = "Contact Form Submission from " . $name;
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    
    mail($to, $subject, $body);
    echo "Thank you for contacting me!";
}
?>
