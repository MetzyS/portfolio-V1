<?php
session_start();
unset($_SESSION['lang']);
$_SESSION['lang'] = 'fr';
header('Location: ../index.php');