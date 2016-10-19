<?php
if(isset($_POST["submit"])){
include '../connectsql/pdoconnect.php';

$sql = "INSERT INTO users (username, password, status)
VALUES ('".$_POST["username"]."','".sha1($_POST["password"])."','lecteur')";
if ($pdo->query($sql)) {
echo "Vous êtes maintenant enregistré";
}
else{
echo "Les donnés n'ont pas été ajoutés.";
}

}

header( "Refresh:3; url=connexion.php", true, 303);
?>
