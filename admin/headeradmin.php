<?php echo ' <nav>
<div style="background-color:black;" class="nav-wrapper">
  <a href="admin.php" class="brand-logo">Cthulhu</a>
  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
  <ul class="right hide-on-med-and-down">
    <li><a href="../index.php">Accueil</a></li>
    <li><a href="admin.php">Admin Pannel</a></li>
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
</script>'; ?>
