<?php
session_start();
unset($_SESSION["username"]);
header("Location: http://localhost/php-homeworks-8/index.php");
exit;