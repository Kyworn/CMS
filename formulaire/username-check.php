<?php
  include '../connectsql/pdoconnect.php';
  if($_POST)
  {
      $name = strip_tags($_POST['name']);

	  $stmt=$pdo->prepare("SELECT * FROM users WHERE username=:name");
	  $stmt->execute(array(':name'=>$name));
	  $count=$stmt->rowCount();

	  if($count>0)
	  {
		  echo "<span style='color:red;'>Le pseudo est déjà prit</span>";
	  }
	  else
	  {
		  echo "<span style='color:green;'>Disponnible</span>";
	  }
  }
?>
