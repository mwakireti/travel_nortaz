<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Ensure PHPMailer is installed via Composer

require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = htmlspecialchars($_POST['email']);

  if (empty($email)) {
    echo json_encode([
      "success" => false,
      "message" => "All fields are required."
    ]);
    exit;
  }

  // Validate email
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode([
      "success" => false,
      "message" => "Invalid email address."
    ]);
    exit;
  }

  // PHPMailer setup
  $mail = new PHPMailer(true);
  try {
    // Server settings
    $mail->isSMTP();
    $mail->Host =
      $_ENV['SMTP_HOST']; // SMTP host
    $mail->SMTPAuth = true;
    $mail->Username =
      $_ENV['SMTP_USERNAME']; //  your email
    $mail->Password =
      $_ENV['SMTP_PASSWORD']; //email password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    // Recipients
    $mail->setFrom($_ENV['SMTP_FROM'], $_ENV['SMTP_FROM_NAME']);
    $mail->addReplyTo($email);
    $mail->addAddress('info@nortazsafari.com'); // Replace with your recipient's email

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Subscribe to our news Later form submission';
    $mail->Body = "
            <h3>Subscibe to our news later</h3>
            <p><strong>Email:</strong> $email</p>  
        ";

    $mail->send();

    echo json_encode([
      "success" => true,
      "message" => "Thank you for your message. We will get back to you shortly."
    ]);
  } catch (Exception $e) {
    echo json_encode([
      "success" => false,
      "message" => "An Error ocurred. Try again later"
    ]);
  }
} else {
  echo json_encode([
    "success" => false,
    "message" => "Invalid request method."
  ]);
}
