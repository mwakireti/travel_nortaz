<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Ensure PHPMailer is installed via Composer

require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $fname = htmlspecialchars($_POST['fname']);
  $lname = htmlspecialchars($_POST['lname']);
  $phone = htmlspecialchars($_POST['phone']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  if (empty($fname) || empty($lname) || empty($phone) || empty($email) || empty($message)) {
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
    $mail->Subject = 'Contact Us Form Submission';
    $mail->Body = "
            <h3>Contact Us Form Submission</h3>
            <p><strong>Name:</strong> $fname</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Comment:</strong> $message</p>
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
