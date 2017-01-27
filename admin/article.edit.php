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
$result = $pdo->prepare("SELECT * FROM posts WHERE id= :postid");
$result->bindParam(':postid', $id);
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
?>
<div class="articleChange">
    <form action="article.update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>" />
        Titre<br>
        <input type="text" name="title" value="<?php echo $row['title']; ?>" /><br>
        <br>Status<br>
        <input type="text" name="content" value="<?php echo $row['content']; ?>" /><br>
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
