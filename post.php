<?php
session_start();
$_SESSION['username'] = $_POST['username'];
$protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === 0 ? 'https://' : 'http://';
header("Location:" . $protocol . $_SERVER["HTTP_HOST"]);
exit;
