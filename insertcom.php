<?php
session_start();
if(isset($_POST["submit"])){
include 'connectsql/pdoconnect.php';

$sql =   "INSERT INTO commentaires (id_billet, auteur, commentaire)
VALUES ('".$_GET['article']."','".$_SESSION["pseudo"]."','".$_POST["commentaire"]."')";
if ($pdo->query($sql)) {
echo "";
}
else{
echo "Les donnés n'ont pas été ajoutés.";
}
}
header('Refresh: '.$_GET['article'].'.php',true,303);
?>
