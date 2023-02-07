<?php
session_start();
unset($_SESSION['lang']);
$_SESSION['lang'] = 'fr';
$page = $_GET['page'];
header('Location: ../index.php?page=' . $page);
exit;
