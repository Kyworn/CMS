<?php
	include ("../connectsql/pdoconnect.php");
	$id=$_GET['id'];
	$sql="DELETE FROM commentaires where id=?";
	$qry=$pdo->prepare($sql);
	$qry->execute(array($id));
		echo "<script language='javascript' type='text/javascript'>alert('Commentaire supprimé!')</script>";
		echo "<script language='javascript' type='text/javascript'>window.open('commentchange.php','_self')</script>";
?>
