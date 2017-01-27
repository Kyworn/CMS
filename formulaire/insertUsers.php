<?php
if(isset($_POST["submit"])){
include '../connectsql/pdoconnect.php';

$sql = "INSERT INTO users (username, password, status)
VALUES ('".$_POST["username"]."','".sha1($_POST["password"])."','Lecteur')";
if ($pdo->query($sql)) {
  echo "<script language='javascript' type='text/javascript'>alert('Utilisateur enregistré!')</script>";
  echo "<script language='javascript' type='text/javascript'>window.open('connexion.php','_self')</script>";
}
else{
echo "Les donnés n'ont pas été ajoutés.";
}

}

