<?php
session_start();
if(isset($_POST["submit"])){
include '../connectsql/pdoconnect.php';
$sql =   "INSERT INTO posts (title, content, pseudo)
VALUES ('".$_POST["title"]."','".$_POST["content"]."','".$_SESSION["pseudo"]."')";
if ($pdo->query($sql)) {
echo "<script language='javascript' type='text/javascript'>alert('Article ajouté!')</script>";
echo "<script language='javascript' type='text/javascript'>window.open('admin.php','_self')</script>";
}
else{
}
}
header( "Refresh:3; url=admin.php", true, 303);

