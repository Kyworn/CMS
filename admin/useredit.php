<?php
// configuration
include('../connectsql/pdoconnect.php');
if(isset($_SESSION['status']))  {
  if($_SESSION['status']  == 'Administrateur'){
// new data
$status = $_POST['status'];
$id = $_POST['uid'];
// query
$sql = "UPDATE users
        SET status=?
		WHERE uid=?";
$q = $pdo->prepare($sql);
$q->execute(array($status,$id));
echo "<script language='javascript' type='text/javascript'>window.open('changeuser.php','_self')</script>";
}
}

?>
