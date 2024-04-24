<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve email from form
    $email = $_POST['email'];

    // Generate verification code
    $verification_code = uniqid();

    // Send verification email
    $to = $email;
    $subject = "Email Verification";
    $message = "Please click the following link to verify your email: http://yourwebsite.com/verify_email.php?email=$email&code=$verification_code";
    $headers = "From: yourname@example.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Verification email sent. Please check your inbox.";
    } else {
        echo "Failed to send verification email. Please try again later.";
    }
}
?>
