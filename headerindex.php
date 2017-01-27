<head>
  <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</head>
<?php
include 'info.php';
$adminbutton = '<li><a style="color:black;" href="admin/admin.php">Page d&apos;administration</a></li>';
if (isset($_SESSION['pseudo'])) {
    echo '
    <nav>
    <div style="background-color:white;" class="nav-wrapper">
      <a style="color:black; padding-left:1em;" href="index.php" class="brand-logo">'; echo $blogname ; echo '</a>
      <a style="color:black;" href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a style="color:black;" href="index.php">Accueil</a></li>';
        if(isset($_SESSION['status']) && $_SESSION['status'] == 'Administrateur'){
          echo $adminbutton;
        }
        echo
        '<li><a style="color:black;" href="formulaire/logout.php">Déconnexion</a></li>
        <li><form action="search.php" style="color:black;" method="post"><input type="text" class="champ" name="search" placeholder=" Recherche par mots clés "/></form></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
        <li><a href="index.php">Accueil</a></li>';
        if(isset($_SESSION['status']) && $_SESSION['status'] == 'Administrateur'){
          echo $adminbutton;
        }
        echo' <li><a href="formulaire/logout.php">Déconnexion</a></li>
        <li><form action="search.php" style="color:black;" method="post"><input type="text" class="champ" name="search" placeholder=" Recherche par mots clés "/></form></li>
      </ul>
    </div>
    </nav>
    ';
} else {
    echo'<nav>
    <div style="background-color:white;" class="nav-wrapper">
      <a style="color:black; padding-left:1em;" href="index.php" class="brand-logo">'; echo $blogname ; echo '</a>
      <a style="color:black;" href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a style="color:black;" href="index.php">Accueil</a></li>
        <li><a style="color:black;" href="formulaire/connexion.php">Connexion/Inscription</a></li>
        <li><form action="search.php" style="color:black;" method="post"><input type="text" class="champ" name="search" placeholder=" Recherche par mots clés "/></form></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
        <li><a href="index.php">Accueil</a></li>
        <li><a href="formulaire/connexion.php">Connexion/Inscription</a></li>
        <li><form action="search.php" style="color:black;" method="post"><input type="text" class="champ" name="search" placeholder=" Recherche par mots clés "/></form></li>

      </ul>
    </div>
    </nav>';
}

?>

<?php echo '
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
<script>
$(".button-collapse").sideNav();
</script>'; ?>
