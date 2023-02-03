<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'fr';
}
$page = filter_input(INPUT_GET, "page");
$lang = $_SESSION['lang'];
include('vars/vars.php');
include('common/template.php');