<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and get form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Admin email address
    $adminEmail = 'admin@example.com'; // Change to your admin email

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';        // Use your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'your-email@gmail.com';  // Your SMTP email
        $mail->Password = 'your-app-password';     // App password (not Gmail password)
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress($adminEmail);              // Admin email

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission: ' . $subject;
        $mail->Body = "
            <h3>New Contact Form Message</h3>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Phone:</strong> {$phone}</p>
            <p><strong>Subject:</strong> {$subject}</p>
            <p><strong>Message:</strong><br>{$message}</p>
        ";

        $mail->send();
        echo '<script>alert("Your message has been sent successfully!"); window.location.href="index.html";</script>';
    } catch (Exception $e) {
        echo '<script>alert("Message could not be sent. Mailer Error: ' . $mail->ErrorInfo . '"); window.history.back();</script>';
    }
} else {
    echo '<script>alert("Invalid request method."); window.history.back();</script>';
}
