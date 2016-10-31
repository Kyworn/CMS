
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Page de Connexion</title>
    <link rel="stylesheet" href="form.css">
    <link rel="shortcut icon" href="logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  </head>
  <body>

    <?php
    session_start();
    if(isset($_POST['connexion'])) {
      include '../connectsql/pdoconnect.php';
      include '../connectsql/config.php';
        if(empty($_POST['pseudo'])) {
            echo "Le champ Pseudo est vide.";
        } else {
            if(empty($_POST['mot_de_passe'])) {
                echo '<h5 style="text-align:center;">Le champ Mot de passe est vide.</h5>';
            } else {
                if(!$pdo){
                    echo "Erreur de connexion à la base de données.";
                }
                 else {
                    $Requete = $pdo->query("SELECT * FROM users WHERE username = '".$Pseudo."' AND password = '".sha1($MotDePasse)."'");
                    if (FALSE === ($row = $Requete->fetch())) {
                        echo '<h5 style="text-align:center;">Il y a une erreur quelque part !</h5>';
                    } else {
                        $_SESSION['pseudo'] = $Pseudo;
                        echo 'test
                        ';
                    }
                }
            }
        }
    }
    ?>

    <?php
     $formulaire = '
     <div class="titre">
         <h2>Formulaire de Connexion</h2>
         <a href="../index.php"><img src="../img/logo.png" /></a>
     </div>
     <div id="form">
         <form action="connexion.php" method="post">
             <div class="row">
                 <div class="input-field col s6">
                     Pseudo: <input type="text" name="pseudo" /> Mot de passe: <input type="password" name="mot_de_passe" value="" />
                     <div id="buttonConIns">
                         <a href="inscription.php"><input type="button" class="btn waves-effect waves-light" value="Inscription" /></a>
                         <input type="submit" class="btn waves-effect waves-light" name="connexion" value="Connexion" />
                     </div>
                 </div>
               </div>
             </div>'
     ?>
<?php
 if(isset($_SESSION['pseudo']))  {
          echo '<div id="Redirect"></br>Salut '.$_SESSION['pseudo'].'</br><p>Vous allez être redirigé dans 3 seconde sur la page d&apos;
          Accueil,</br> si vous ne voulez pas vous pouvez vous déconnecter !</br> Attention vous avez 3 secondes !</p></br></br>
          <a class="waves-effect waves-light btn" href="logout.php">Logout</a> </div>';
          header( "location:../index.php", true, 303);

      }
      else {
          echo  $formulaire;
      }
 ?>

</body>
</html>
