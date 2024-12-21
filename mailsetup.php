<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
          $mail = new PHPMailer(true);
          $mail->SMTPDebug = 0;                      // Enable verbose debug output
          $mail->IsSMTP();                                            // Send using SMTP
          $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
          $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
          $mail->Username   = 'dypmedical@gmail.com';                     // SMTP username
          $mail->Password   = 'admin@1234';                               // SMTP password
          $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
          $mail->Port       = 587;
          $mail->SetFrom('dypmedical@gmail.com', 'NSS MU');
          $mail->isHTML(true);
?>