<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gestion des Utilisateurs</title>
    <link rel="stylesheet" href="admin.css" media="screen" title="no title">

  </head>
  <body>
    <?php include 'headeradmin.php'; ?>

<div class="contenu">
    <?php



        try {
          include('../connectsql/pdoconnect.php');
          if(isset($_SESSION['status']))  {
            if($_SESSION['status']  == 'Administrateur'){
          $reponse = $pdo->query('SELECT idb, auteur, commentaire FROM commentaires ORDER BY idb  ');
          echo "<table><tr><td>Titre</td><td>Aperçu du contenu</td><td>Date</td><td></td>";
          while($donnees = $reponse->fetch())
            {
              echo "<tr><td>".$donnees['auteur']."</br></td>";
              echo "<td>".$donnees['commentaire']."</td>";
              echo "<td><a href='.php?id=".$donnees['idb']."'>Editer</a></td>";
              echo "<td><a href='deletecomment.php?id=".$donnees['idb']."'>x</a></td><tr>";
?>


<?php
}
}
}
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
?>
</ol>
</table>
</div>
</div>
  </body>
</html>
