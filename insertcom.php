<?php
if(isset($_POST["submit"])){
include 'connectsql/pdoconnect.php';

$sql =   "INSERT INTO commentaires (idb, auteur, commentaire)
VALUES ('".$_GET['article']."','".$_SESSION["pseudo"]."','".$_POST["commentaire"]."')";
if ($pdo->query($sql)) {
  echo "<script language='javascript' type='text/javascript'>alert('Commentaire Ajouté!')</script>";
  echo "<script language='javascript' type='text/javascript'>window.open('index.php','_self')</script>";

}
else{
echo "Les donnés n'ont pas été ajoutés.";
}
}
?>
