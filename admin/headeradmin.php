<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

  </head>
  <body>

  </body>
</html>
<?php
if(isset($_SESSION['pseudo']))  {
  if($_SESSION['status']  == 'Administrateur'){
    echo ' <nav>
<div style="background-color:black;" class="nav-wrapper">
  <a href="admin.php" class="brand-logo">Cthulhu</a>
  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
  <ul class="right hide-on-med-and-down">
    <li><a href="../index.php">Accueil</a></li>
    <li><a href="admin.php">Page d&apos;administration</a></li>
    <li><a href="newpost.php">Ajouter un Post</a></li>
    <li><a href="../formulaire/logout.php">Déconnexion</a></li>
  </ul>
  <ul class="side-nav" id="mobile-demo">
  <li><a href="../index.php">Accueil</a></li>
  <li><a href="admin.php">Admin Pannel</a></li>
  <li><a href="newpost.php">Ajouter un Post</a></li>
  <li><a href="../formulaire/logout.php">Déconnexion</a></li>
  </ul>
</div>
</nav>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
<script>
$(".button-collapse").sideNav();
</script>';
}
else {
     echo '<div style="text-align:center;margin-top:15%;"><i style="font-size:10em;" class="material-icons">report_problem</i><h4>Vous ne devriez pas être ici...</h4><h5><a href="../index.php">Cliquez ici s&apos;il vous plaît !</a></h5></div>';
}
}
else {
     echo '<div style="text-align:center;margin-top:15%;"><i style="font-size:10em;" class="material-icons">report_problem</i><h4>Vous ne devriez pas être ici...</h4><h5><a href="../index.php">Cliquez ici s&apos;il vous plaît !</a></h5></div>';
}
?>
