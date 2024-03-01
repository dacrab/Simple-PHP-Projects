<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h1>Invalid email format! Please provide a valid email address.</h1>";
        exit;
    }
    
    // Email subject and message
    $subject = "New message from $name";
    $body = "Name: $name\nEmail: $email\n\n$message";
    
    // Send email
    $to = "your_email@example.com"; // Enter your email address here
    if (mail($to, $subject, $body)) {
        echo "<h1>Thank you for your message! We'll get back to you soon.</h1>";
    } else {
        echo "<h1>Sorry, something went wrong. Please try again later.</h1>";
    }
}
?>
