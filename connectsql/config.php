<?php
$Pseudo = htmlentities($_POST['pseudo'], ENT_QUOTES, "ISO-8859-1");
$MotDePasse = htmlentities ($_POST['mot_de_passe'], ENT_QUOTES,"ISO-8859-1");
$mysqli = mysqli_connect("localhost", "admin", "admin", "blogname");
 ?>
