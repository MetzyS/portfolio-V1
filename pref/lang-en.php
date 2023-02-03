<?php
session_start();
unset($_SESSION['lang']);
$_SESSION['lang'] = 'en';
header('Location: ../index.php');