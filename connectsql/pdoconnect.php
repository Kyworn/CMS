<?php
$host = "localhost";
$user = "admin";
$password = "admin";
$database_name = "blogname";
$pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
));
 ?>
