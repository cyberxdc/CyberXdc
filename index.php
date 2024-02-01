<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer autoload file
require 'vendor/autoload.php';

// Get visitor information
$ipAddress = $_SERVER['REMOTE_ADDR'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : "N/A";

// Display visitor information
echo "<hr>";
echo "<p><strong>IP Address:</strong> $ipAddress</p>";
echo "<p><strong>User Agent:</strong> $userAgent</p>";
echo "<p><strong>Referer:</strong> $referer</p>";
echo "<hr>";
// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // Set mailer to use SMTP
    $mail->isSMTP();

    // Specify the SMTP server
    $mail->Host = 'pixelsscreen.com';

    // Enable SMTP authentication
    $mail->SMTPAuth = true;

    // SMTP username (your email address)
    $mail->Username = 'no-reply@pixelsscreen.com';

    // SMTP password
    $mail->Password = 'ya0ds4v7B';

    // Enable TLS encryption, `ssl` also accepted
    $mail->SMTPSecure = 'tls';

    // TCP port to connect to
    $mail->Port = 587;

    // Set sender and recipient
    $mail->setFrom('no-reply@pixelsscreen.com', 'pixelsscreen');
    $mail->addAddress('cyberxdc007@gmail.com', 'Recipient');

    // Set email subject and body
    $mail->Subject = 'Test Email via SMTP';
    $mail->Body    = 'This is a test email sent via SMTP using PHPMailer.';

    // Send the email
    $mail->send();

    echo 'Email has been sent successfully.';
} catch (Exception $e) {
    echo "Error: {$mail->ErrorInfo}";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Dharmendra chik baraik </h1>
    
</body>
</html>