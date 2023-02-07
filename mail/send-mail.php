<?php
session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if (!isset($_SESSION['mail-status'])) {
    $_SESSION['mail-status'] = "empty";
} else {
    unset($_SESSION['mail-status']);
    $_SESSION['mail-status'] = "empty";
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require_once '../vendor/autoload.php';

try {
    $mail = new PHPMailer(true);

    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->SMTPAuth = true;

    // SMTP Connection
    $mail->Host = "smtp.ionos.fr";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // MAIL Details
    $mail->Username = "youremail@mail.com"; // server mail (sends the email)
    $mail->Password = "yourpassword";

    // MAIL Send
    $mail->setFrom("$email or any@mail.com", $name);
    $mail->addAddress("yourmail@mail.com", "yourname"); // reciever mail (your main email?)

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message . "<br>" . $email;

    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';

    $mail->send();
    $_SESSION['mail-status'] = "sent";
    header('Location: ../index.php?page=contact');
} catch (Exception $e) {
    $_SESSION['mail-status'] = "error";
    header('Location: ../index.php?page=contact');
    $_SESSION['mail-error'] = $mail->ErrorInfo;
};
