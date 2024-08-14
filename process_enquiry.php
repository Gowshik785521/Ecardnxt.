<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email details
    $to = "leonop360@gmail.com";
    $subject = "New Enquiry from " . $name;
    $body = "Name: $name\nPhone: $phone\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: noreply@example.com";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Enquiry sent successfully!";
    } else {
        echo "Failed to send enquiry.";
    }
}
?>