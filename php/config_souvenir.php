<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'travel_user');
define('DB_CHARSET', 'utf8');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
error_reporting(E_ALL & ~E_NOTICE);
define('PATH_LIB', __DIR__ . DIRECTORY_SEPARATOR);
session_start();
if (!is_array($_SESSION['cart'])) { $_SESSION['cart'] = []; }
?>
