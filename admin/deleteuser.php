<?php
	include ("../connectsql/pdoconnect.php");
	$id=$_GET['id'];
	$sql="DELETE FROM users where uid=?";
	$qry=$pdo->prepare($sql);
	$qry->execute(array($id));
		echo "<script language='javascript' type='text/javascript'>alert('Utilisateur supprimé!')</script>";
		echo "<script language='javascript' type='text/javascript'>window.open('changeuser.php','_self')</script>";
?>
