<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialize response array
    $response = array("status" => "error", "message" => "Unknown error");

    // Get and sanitize form inputs
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    $phone = htmlspecialchars($_POST['phone']);

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'midou17.br@gmail.com'; // Your SMTP email
        $mail->Password = 'akcq losc cggf xwub'; // Your SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress('faten.maalej@themission.tn'); // Your recipient email

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = "<h3>Email from: $name ($email)</h3><p>$message</p>";

        // Send email
        $mail->send();

        // Success response
        $response = array("status" => "success", "message" => "Message sent successfully!");

    } catch (Exception $e) {
        // Error response
        $response = array("status" => "error", "message" => "Mailer Error: {$mail->ErrorInfo}");
    }

    // Send JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}
?>
