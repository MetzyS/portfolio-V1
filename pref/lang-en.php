<?php
session_start();
unset($_SESSION['lang']);
$_SESSION['lang'] = 'en';
$page = $_GET['page'];
header('Location: ../index.php?page=' . $page);
// header("location:javascript://history.go(-1)");
exit;
