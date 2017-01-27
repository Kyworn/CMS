<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="admin.css" media="screen" title="no title">
  </head>
  <body>
    <?php
    session_start();
    include 'headeradmin.php'; ?>
    <?php
	include('../connectsql/pdoconnect.php');
  if(isset($_SESSION['status']))  {
    if($_SESSION['status']  == 'Administrateur'){
	$id=$_GET['id'];
	$result = $pdo->prepare("SELECT * FROM users WHERE uid= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
<div class="articleChange">
<form action="user.update.php" method="POST">
<input type="hidden" name="uid" value="<?php echo $id; ?>" />

Username<br>
<?php echo $row['username']; ?><br>
<br>Status<br>
<input type="text" name="status" value="<?php echo $row['status']; ?>" /><br>
<input type="submit" value="Modifier"/>
</form>
<?php
	}
}
}
?>
</div>
  </body>
</html>
