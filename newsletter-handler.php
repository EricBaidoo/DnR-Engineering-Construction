<?php
// newsletter-handler.php
// Basic handler for newsletter signup form


require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
require 'vendor/phpmailer/phpmailer/src/Exception.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Save to file
        $file = __DIR__ . '/newsletter-signups.txt';
        $entry = date('Y-m-d H:i:s') . " | " . $email . "\n";
        $saved = file_put_contents($file, $entry, FILE_APPEND | LOCK_EX);

        // Send notification email using PHPMailer
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'info@dnrengineering.org'; // Your Hostinger email
            $mail->Password = 'DnR1234#'; // Replace with your Hostinger email password
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            $mail->setFrom('info@dnrengineering.org', 'DnR Engineering');
            $mail->addAddress('info@dnrengineering.org'); // Your email to receive notifications
            $mail->Subject = 'New Newsletter Signup';
            $mail->Body = "A new user has subscribed to the newsletter:\n\nEmail: $email\nTime: " . date('Y-m-d H:i:s');

            $mail->send();
            $sent = true;
        } catch (Exception $e) {
            $sent = false;
        }

        if ($saved !== false && $sent) {
            header('Location: contact-section.php?status=success');
            exit;
        } else {
            header('Location: contact-section.php?status=error');
            exit;
        }
    } else {
        header('Location: contact-section.php?status=error');
        exit;
    }
} else {
    header('Location: contact-section.php');
    exit;
}
