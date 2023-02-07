<?php
session_start();

$name = $_POST['name'];
$mail = $_POST['mail'];
$subject = $_POST['subject'];
$message = $_POST['message'];


echo $name . " " . $mail . " " . $subject . " " . $message;



// header('Location: ../index.php?page=contact');
// exit;
