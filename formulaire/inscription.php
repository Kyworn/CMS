<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Inscription</title>.
  <link rel="shortcut icon" href="logo.png">
  <link rel="stylesheet" href="form.css" media="screen" title="no title">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
  <?php
  session_start();
  include '../connectsql/pdoconnect.php';

  ?>
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
  <script>
  $(".button-collapse").sideNav();
  </script>
  <script type="text/javascript">
  $(document).ready(function()
  {
    $("#name").keyup(function()
    {
      var name = $(this).val();
      if(name.length > 0)
      {
        $.ajax({
          type : 'POST',
          url  : 'username-check.php',
          data : $(this).serialize(),
          success : function(data)
          {
            $("#result").html(data);
          }
        });
        return false;
      }
      else
      {
        $("#result").html('');
      }
    });

  });
  </script>


  <div class="titre">
      <h2>Formulaire d'Inscription</h2>
      <a href="../index.php"><img src="../img/logo.png" /></a>
  </div>
  <div id="form">
      <h5>Regarde si ton pseudo est déjà pris !</h5>
      <form action="insertUsers.php" method="post">
          <div class="row">
              <div class="input-field col s6">
                <span id="result" </br></span>
                  <input type="text" name="name" id="name" placeholder="Pseudo" />
                   Pseudo : <input type="text" name="username" placeholder="Username" required="required" /> Mot de passe :
                  <input type="password" name="password" required="required" />
                  <div id="buttonConIns">
                      <a href="connexion.php"><input type="button" class="btn waves-effect waves-light" value="Connexion" /></a>
                      <input class="btn waves-effect waves-light" class="material-icons right" type="submit" value="S'inscrire" name="submit" />
                  </div>
              </div>
          </div>
        </div>
  </body>
  </html>
