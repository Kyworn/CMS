<?php
	include ("../connectsql/pdoconnect.php");
	$id=$_GET['id'];
	$sql="DELETE FROM posts where id=?";
	$qry=$pdo->prepare($sql);
	$qry->execute(array($id));
		echo "<script language='javascript' type='text/javascript'>alert('Article supprimé!')</script>";
		echo "<script language='javascript' type='text/javascript'>window.open('articlechange.php','_self')</script>";

?>
