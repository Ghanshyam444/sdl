<?php
if (isset($_GET['email']) && isset($_GET['code'])) {
    $email = $_GET['email'];
    $verification_code = $_GET['code'];

    // Verify the email and code (you would typically check against a database)
    // For demonstration purposes, we'll just display a success message
    echo "Email $email has been verified successfully.";
} else {
    echo "Invalid verification link.";
}
?>
