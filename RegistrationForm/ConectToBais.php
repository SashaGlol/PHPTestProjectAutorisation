<?php

$host = 'localhost';
$db;
$user; 
$pass; 
$charset = 'utf8mb4';

$mysqli = mysqli_connect($host, $user, $pass, $db);
mysqli_set_charset($mysqli, $charset);
unset($host, $db, $user, $pass, $charset);

?>