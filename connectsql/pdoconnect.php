<?php
$host = "mysql.hostinger.fr";
$user = "u625628409_cms";
$password = "idriss";
$database_name = "u625628409_cms;charset=utf8";
$pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
));
 ?>
