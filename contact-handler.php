<?php
// PHPMailer SMTP contact form handler for DnR Engineering

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $subject = isset($_POST['subject']) ? trim($_POST['subject']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';
    if ($name && filter_var($email, FILTER_VALIDATE_EMAIL) && $subject && $message) {
        $mail = new PHPMailer(true);
        try {
            // SMTP settings
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'info@dnrengineering.org'; // Your Hostinger email
            $mail->Password = 'DnR1234#'; // Replace with your email password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;

            // Recipients
            $mail->setFrom('info@dnrengineering.org', 'DnR Engineering Website');
            $mail->addAddress('info@dnrengineering.org');
            $mail->addReplyTo($email, $name);

            // Content
            $mail->isHTML(false);
            $mail->Subject = 'Contact Form: ' . $subject;
            $mail->Body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message\n\nSent: " . date('Y-m-d H:i:s');

            $mail->send();
            header('Location: contact.php?status=success');
            exit;
        } catch (Exception $e) {
            header('Location: contact.php?status=error');
            exit;
        }
    } else {
        header('Location: contact.php?status=error');
        exit;
    }
} else {
    header('Location: contact.php');
    exit;
}
