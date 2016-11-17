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
      $reponse = $pdo->query('SELECT uid, username, status FROM users');
      echo "<table><tr><td>Username</td><td>Status</td><td></td><td></td>";
      while($donnees = $reponse->fetch())
        {
          echo "<tr><td>".$donnees['username']."</td>";
          echo "<td>".$donnees['status']."</td>";
          echo "<td><a href='edituser.php?id=".$donnees['uid']."'>Editer</a></td>";
          echo "<td><a href='deleteuser.php?id=".$donnees['uid']."'>x</a></td><tr>";
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
  </body>
</html>
