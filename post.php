<?php
session_start();
$_SESSION['username'] = $_POST['username'];
header("Location: http://localhost/php-homeworks-8/index.php");
exit;