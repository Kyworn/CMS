<?php
session_start();
if(isset($_POST["submit"])){
include '../connectsql/pdoconnect.php';
$sql = "INSERT INTO posts (title, content, pseudo, timedate)
VALUES ('".$_POST["title"]."','".$_POST["content"]."','".$_SESSION["pseudo"]."','".$_SESSION["timedate"]."')";
if ($pdo->query($sql)) {
echo "Article Rajouté";
}
else{
echo "Les donnés n'ont pas été ajoutés.";
}
}
header( "Refresh:3; url=admin.php", true, 303);
?>
