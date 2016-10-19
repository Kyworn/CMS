<head>
  <link rel="stylesheet" href="headerindex.css" media="screen" title="no title">
  <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">

</head>
<?php
echo '
<div id="title">
<img src="img/logo.png"/>
  <a href="index.php">  <h1>
      BlogName
    </h1>
  </a>
  </div>
<header>
<div id="header" class="container">
<nav>
          <ul>
              <a href="index.php">
                  <li class="animated fadeIn">Accueil</li>
              </a>' ?>
<?php if (isset($_SESSION['pseudo'])) {
    echo '
<a href="admin/admin.php"><li class="animated fadeIn">Page d&apos;Administration</li></a>
<a href="formulaire/logout.php">
  <li class="animated fadeIn">Déconnection</li>
</a>';
} else {
    echo'<a href="formulaire/connexion.php">
    <li class="animated fadeIn">Login</li>
</a>';
}
echo '    <form action="search.php" method="post">
      <input type="text" class="champ" name="search" placeholder=" Recherche par mots clés "/>
    </form>
  </ul>
</nav>
</div>
</header>'
?>
